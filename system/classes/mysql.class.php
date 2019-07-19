<?php

class mySql {

    private $sHost = '';
    private $sUsername = '';
    private $sPassword = '';
    private $sDatabase = '';
    private $oMySQLi = '';
    private $rStatement = '';
    private $sQuery;
    private $aResults;
    private $iInsertId;
    private $iErrorCode;
    private $bInTransaction = FALSE;

    /**
     * @description
     * @param $sUsername The username to connect with.
     * @param $sPassword The password to connect with.
     * @param $sDatabase The database the application uses.
     * @param $sHost The host to connect with.
     * @return void
     */
    public function __construct($sUsername, $sPassword, $sDatabase, $sHost) {
        $this->sHost = $sHost;
        $this->sUsername = $sUsername;
        $this->sPassword = $sPassword;
        $this->sDatabase = $sDatabase;
    }

    /**
     * @description Making the connection and setting up a UTF8-connection, to ensure correct parsing of special characters.
     * @return boolean
     */
    public function makeConnection() {
        try {
            $this->oPDO = new PDO('mysql:dbname=' . $this->sDatabase . ';host=' . $this->sHost, $this->sUsername, $this->sPassword);

            $this->oPDO->query("SET NAMES UTF8");
            #####$this->oPDO->query("SET SESSION time_zone = '+2:00'");
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
        return TRUE;
    }

    public function beginTransaction() {

        $this->bInTransaction = TRUE;
        $this->oPDO->beginTransaction();
    }

    public function rollBack() {

        $this->bInTransaction = FALSE;
        $this->oPDO->rollBack();
    }

    public function commit() {

        $this->bInTransaction = FALSE;
        $this->oPDO->commit();
    }

    /**
     * @description Preparing a statement.
     * @param
     * @return boolean
     */
    public function prepare($sQuery) {

        $this->sQuery = $sQuery;

        try {

            $this->rStatement = $this->oPDO->prepare($sQuery);
        } catch (PDOException $e) {

            return FALSE;
        }

        return TRUE;
    }

    /**
     * @description Execute the prepared statement.
     * @param $aParams
     *
     * @param $bLog Whether to log a possible error or not. Defaults to true, just doesn't log when the log query
     * 				fails, to prevent infinite loops.
     * @return array
     */
    public function execute($aParams = NULL, $bLog = TRUE) {

        $iStart = microtime(TRUE);
        $bResult = $this->rStatement->execute($aParams);
        $iEnd = microtime(TRUE);

        $aBacktrace = debug_backtrace();


        if ($bResult != FALSE) {

            if (stripos($this->sQuery, 'SELECT') !== FALSE) {

                $this->aResults = $this->rStatement->fetchAll(PDO::FETCH_OBJ);  // array of objects
                return count($this->aResults);
            } else if (stripos($this->sQuery, 'INSERT') !== FALSE) {

                $this->iInsertId = $this->oPDO->lastInsertId();
                return $this->iInsertId;
            } else {

                return $this->rStatement->rowCount();
            }
        } else {

            $aErrors = $this->rStatement->errorInfo();

            if (!array_key_exists(1, $aErrors)) {

                return FALSE;
            }

            $aBacktrace = debug_backtrace();
            $this->setErrorCode($aErrors[1]);

            if ((DEBUG_MODE === TRUE && $aErrors[1] != 1062)) {

                echo 'Fout in query: <br />
						' . $this->sQuery . '<br />
						Foutmelding: 
						' . $aErrors[2] . '<br />
						Foutcode: 
						' . $aErrors[1];
            }

            if ($bLog === TRUE) {

                //Registry::load('oErrorHandler')->setSqlError($this->sQuery, $aErrors[2], $aErrors[1], $aBacktrace[0]['file'], $aBacktrace[0]['line'], $aBacktrace[0]['function']);
            }

            return FALSE;
        }
    }

    private function logQuery($iTime, $sFile, $sMethod, $sLine) {

        if ($iTime > 1) {

            $bLong = TRUE;
        } else {

            $bLong = FALSE;
        }

        $rStatement = $this->oPDO->prepare("INSERT INTO
												s_querylog
													(query,
													 execution_time,
													 execution_datetime,
													 file,
													 method,
													 line,
													 toolong)
												VALUES
													(:query,
													 :execution_time,
													 NOW(),
													 :file,
													 :method,
													 :line,
													 :long)");

        $rStatement->execute(array(':query' => $this->sQuery,
            ':execution_time' => $iTime,
            ':file' => $sFile,
            ':method' => $sMethod,
            ':line' => $sLine,
            ':long' => $bLong
        ));
    }

    /**
     * @description Fetch all results returned by previously executed (select) query.
     * @return Array with the results fetched.
     */
    public function fetchAll() {

        return $this->aResults;
    }

    /**
     * @description Return the first (and most likely only) row returned by previously executed (select) query.
     * @return mixed (if a result is found), boolean - false - on failure.
     */
    public function fetchOne() {

        return (isset($this->aResults[0]) ? $this->aResults[0] : false);
    }

    /**
     * @description Fetches a specific column returned by a previously executed (select) query. Handy for SELECT-statements
     * 				with just one column.
     * @example		SELECT username FROM users WHERE user_id = 1 -> mysql::fetchcolumn(username) -> 'Robin'
     * @param $sColumn The column to fetch.
     * @return mixed (whatever the database returns if a result is found), boolean (false) on failure.
     */
    public function fetchColumn($sColumn) {

        //return (isset($this->aResults[0][$sColumn]) ? $this->aResults[0][$sColumn] : false);
        return (isset($this->aResults[0]->$sColumn) ? $this->aResults[0]->$sColumn : false);
    }

    private function setErrorCode($iErrorCode) {

        $this->iErrorCode = $iErrorCode;
    }

    public function getErrorCode() {

        return $this->iErrorCode;
    }

    public function getInsertId() {

        return $this->iInsertId;
    }

    public function select($query, $parms = Array()) {
        $this->prepare($query);
        $this->execute($parms);
    }

}

?>
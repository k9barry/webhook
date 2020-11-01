<?php

namespace Webhook\Functions;

class createIncidentsTable
{
    /**
     * createIncidentsTable
     *
     * @param  mixed $db_conn
     * @param  mixed $db_incident
     * @return void
     */
    public function createIncidentsTable($db_conn, $db_incident)
    {
        $sql = "CREATE TABLE IF NOT EXISTS $db_incident
		(
        db_CallId INTEGER PRIMARY KEY,
        db_CallNumber INTEGER,
        db_ClosedFlag TEXT,
        db_AgencyType TEXT,
        db_CreateDateTime TEXT,
        db_CallType TEXT,
        db_AlarmLevel TEXT,
        db_RadioChannel TEXT,
        db_NatureOfCall TEXT,
        db_CommonName TEXT,
        db_FullAddress TEXT,
        db_State TEXT,
        db_NearestCrossStreets TEXT,
        db_AdditionalInfo TEXT,
        db_FireOri TEXT,
        db_FireQuadrant TEXT,
        db_PoliceOri TEXT,
        db_PoliceBeat TEXT,
        db_LatitudeY TEXT,
        db_LongitudeX TEXT,
        db_UnitNumber TEXT,
        db_Incident_Number TEXT,
        db_Incident_Jurisdiction TEXT,
        db_Narrative_Text TEXT
        )";
        $db_conn->exec($sql);
        $logger->info("[CreateIncidentsTable] Create table " . $db_incident . " if it does not exist");
    }
}
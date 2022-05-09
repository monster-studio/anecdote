<?php

$result["evidence_id"] = $_POST["evidence_id"];
$result["full_name"] = $_POST["evidence_data"][0]["user_details"]["first_name"]." ".$_POST["evidence_data"][0]["user_details"]["last_name"];
$result["email"] = $_POST["evidence_data"][0]["user_details"]["email"];
$result["updated_at"] = $_POST["evidence_data"][0]["user_details"]["updated_at"];
$result["MFA_enabled"] = $_POST["evidence_data"][0]["security"]["mfa_enabled"];
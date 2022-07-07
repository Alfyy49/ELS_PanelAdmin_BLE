# ELS_PanelAdmin_BLE

This repo contain file for project monitoring Access of Automation Door Based on BLE ESP32 for fulfill my task of internship from Smart E-Life Solutions, Malaysia.

If u want tryna running this repo, u can access to pull this repo with "gh repo clone Alfyy49/ELS_PanelAdmin_BLE."

In this project, im using xampp and create database in mysql. I've made 2 database, which is "mqtt_log" that contain "data" table is used for database from what nodejs has sent and making automatic update total entry room/building using ble that already has grant permission from main program of ESP32 as authorization controller. Here, nodejs act as subscribe topic that contain in mqtt broker. Database "user_php" that contain "verifed" table for database verified user that i add manually, but this database could make automatic update on my dashboard specially in number for verified user.


I'm a newbie at IoT and WebDeveloper, so for build my admin panel i'm using template from CodingLab. Hopefully this repo can help & give u guys new knowledge. Tq^^

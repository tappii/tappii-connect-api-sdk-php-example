<?php

require_once "vendor/autoload.php";

use Tappii\TappiiConnectApi\V1\TappiiConnectApi;

$tappii = new TappiiConnectApi("eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxNjQ4MDA0NzE4IiwianRpIjoiYzI5MWNmNGUzMjVkOGQ4NDdiNjI1N2YxNmQ0YWM0MDY2M2Y5MDljZWMxZTk3ZTUwZjNiM2Y0YzIxMDY1Y2Y2ZTE3MGNlZjU4ZGQ5MmMyMzgiLCJpYXQiOjE2NDgwMDQ3NjkuMDIwNzgzLCJuYmYiOjE2NDgwMDQ3NjkuMDIwNzg5LCJleHAiOjI0MzY5MjMxNjkuMDE1ODc3LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.O7RrIgEalrjAlB82JrgbKEllVrVtUlAGPLx2W0RuTSdykPkSpOt_S_CK84XEX1QGPLij0eEIiGKmFqxaqGu0FBu6HOunySiACMVtL5_g65FrXKkIBeG7jqWtwYsFWyQ8mr8LVGg-043ZWVyCsbVbSx93NwP1vMvd8Zp_zNpyz0mBJWhTXLossN-t-Gzi3DI4nxkuVKdiLB0pJFrJzV8zxsu-O3u7Nh0s6cILX8l2zL2hOl5uSvZuj0rOJarUmx6LovPDGVIAwVOqVdYf34Wj84ynIoxOUsbIefZ84W8UPL-22P06E5jPiPWA21P2NTWoDMYusRiR3VV8mp1ULmy_y5laTJYMtaJws1Rdjx2EIc7NcImCn3lE6PdSNQEPfXXe_KzAHCrw4uuI6rjZqIgcMttG1dj5hiuI-R5D7n9owChuTvef7EEXWROTfbHUI8D5We3iBRTq28zqHPXze2y5kbFwmG4-D_TPjGTn2MnX3ljbJ0U9zv0Qz01-tpTCJlNJf6YLK_UGKFrjNB_vw0viM0aKBeSkinHeA2gdmZvptL-NQCqVEqrOqaqb8xGUlmi4VefzY8beRB0NxYlsXifENxHMPPUbJwjLl9yWv4blVA4-cPlRc1tKhWA65ZwjC7TDL8wxwFcFalaiTolDCTrlLlwBGNzt4c5ugk9ilz2gILQ");

var_dump($tappii->getTags());

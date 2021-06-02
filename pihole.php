<?php
$json = file_get_contents("http://your-pihole-ip/admin/api.php?summary");
$data=array();
$data = json_decode($json, true);
//print_r ($data);
echo "Pi-hole® status : ".$data["status"]."<br>";
echo "Domains on blocklist : ".$data["domains_being_blocked"]."<br>";
echo "Blocked queries today : ".$data["ads_blocked_today"]."<br>";
echo "Overall queries today : ".$data["dns_queries_today"]."<br>";
echo "Blocked queries in %: ".$data["ads_percentage_today"]."%<br>";
echo "Currently connected devices: ".$data["unique_clients"]."<br>";
?>
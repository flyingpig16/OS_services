<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>System Information</h1>

<h2>Operating System Version</h2>
<pre>
<?php echo shell_exec('cat /etc/os-release'); ?>
</pre>

<h2>Hostname</h2>
<pre>
<?php echo shell_exec('hostname'); ?>
</pre>

<h2>CPU Count</h2>
<pre>
<?php echo shell_exec('nproc'); ?>
</pre>

<h2>Memory Size (in MB)</h2>
<pre>
<?php echo shell_exec('free -m'); ?>
</pre>

<h2>Filesystem Layout</h2>
<pre>
<?php echo shell_exec('lsblk'); ?>
</pre>

<h2>Filesystem Mounts</h2>
<pre>
<?php echo shell_exec('df -h'); ?>
</pre>

<h2>Open Ports</h2>
<pre>
<?php echo shell_exec('netstat --inet -anl'); ?>
</pre>


<h2>Recenlty Installed Packages</h2>
<pre>
<?php echo shell_exec('[200~grep " install " /var/log/dpkg.log | tail -n 20'); ?>
</pre>

</body>
</html>

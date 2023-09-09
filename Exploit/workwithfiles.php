<?php

// Get the list of files in the current directory
$files = glob("*");

// Create a table
echo "<table>";

// Iterate over the files array
foreach ($files as $file) {
  // Create a row
  echo "<tr>";

  // Add the file name to the row
  echo "<td>$file</td>";

  // Add buttons for the abovementioned actions
  echo "<td><button onclick=\"rename('$file', 'new_file.txt')\">Rename</button></td>";
  echo "<td><button onclick=\"unlink('$file')\">Delete</button></td>";

  // End the row
  echo "</tr>";
}

// End the table
echo "</table>";

?>











<!DOCTYPE html>
<html>
<head>
<title>List Current Directory</title>
<script>
function listDirectory() {
  // Get the current directory.
  var dir = require("fs").readdirSync(".");

  // Create a div to hold the list of files.
  var list = document.createElement("div");
  list.setAttribute("id", "list");

  // Loop through the files and add them to the list.
  for (var i = 0; i < dir.length; i++) {
    var file = dir[i];
    var li = document.createElement("li");
    li.textContent = file;
    list.appendChild(li);
  }

  // Create a popup and add the list to it.
  var popup = document.createElement("div");
  popup.setAttribute("class", "popup");
  popup.appendChild(list);

  // Show the popup.
  popup.style.display = "block";
}
</script>
</head>
<body>
<button onclick="listDirectory()">List Directory</button>
</body>
</html>


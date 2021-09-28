<?php

function GenerateTable()
{
  session_start();

  $str =
    "
    <table class='table'>
      <thead>
        <tr>
          <th scope='col'>Email</th>
          <th scope='col'>Password</th>
        </tr>
      </thead>
    <tbody>";

  foreach ($_SESSION as $key => $value) {
    $str .= "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
  }

  $str .= "</tbody></table>";

  return $str;
}

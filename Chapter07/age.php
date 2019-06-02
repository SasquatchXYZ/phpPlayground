<?php
  $current_date = new DateTime();
  $birth_date = new DateTime('1989-05-23 20:23:00');
  $age = $birth_date->diff($current_date);
  echo $age->format('You are %R%y years, %m months %d days old.');
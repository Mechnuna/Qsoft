<?php

function account_data($connect, $user_email)
{
    $result = mysqli_query($connect, "select g.* , u.* from users as u left join user_group as ug on u.id = ug.user_id left join groups as g on ug.group_id = g.id where u.email = '$user_email'");
    $data_mass = (mysqli_fetch_all($result));
    return $data_mass;
}

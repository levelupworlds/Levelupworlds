<?

// Скрипт проверки


# Соединямся с БД


mysql_connect("localhost", "levelup", "dqei901du890y2h");

mysql_select_db("levelupworlds");


if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))

{   

    $query = mysql_query("SELECT *,INET_NTOA(user_ip) FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");

    $userdata = mysql_fetch_assoc($query);


    if(($userdata['user_hash'] == $_COOKIE['hash']) && ($userdata['user_id'] == $_COOKIE['id'])) {

        setcookie("id", "", time() - 3600*24*30*12, "/");

        setcookie("hash", "", time() - 3600*24*30*12, "/");

        print "Все круто!";


    }

    else

    {

        print "Привет, ".$userdata['user_login'].". Всё работает!";

    }

}

else

{

    print "Включите куки";

}

?>
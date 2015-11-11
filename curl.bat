curl -X PUT -d "Hola1" http://localhost/m8/crud.php?id=1
curl -X PUT -d "Hola2" http://localhost/m8/crud.php?id=2
curl -X PUT -d "Hola3" http://localhost/m8/crud.php?id=3
curl -X PUT -d "Hola4" http://localhost/m8/crud.php?id=4

curl -X GET http://localhost/m8/crud.php?id=1
curl -X GET http://localhost/m8/crud.php?id=2
curl -X GET http://localhost/m8/crud.php?id=3
curl -X GET http://localhost/m8/crud.php?id=4

curl -X DELETE http://localhost/m8/crud.php?id=1
curl -X DELETE http://localhost/m8/crud.php?id=4
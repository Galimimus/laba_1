# HTTP аутентификация
## Задание
Спроектировать и разработать систему авторизации пользователей на протоколе HTTP
## [Пользовательский интерфейс](https://www.figma.com/file/VOymgyIiUEpZEu44eiaEL3/signup?node-id=5%3A9)
## Пользовательские сценарии работ
- [Страница авторизации](https://sequencediagram.org/index.html#initialData=IYYwLg9gTgBI+CCD4QQ3CCBkQQ7CAMEwggGEEEIghWEFQCgAHYKMASxErIDswZAkEEFEQBQFhAiATYMYAI2ABnAKYxAiCCAUECJFEqDDgKoAtAD5WHAFwJcgfhBAAiDZMgLhBsMQCIgCfYB4QQNIgM0FQBuvMRs5F+EAB4wolAHMAC0YIADNmNnZNHCRADhB2bEAxEDjAeRAYRMBeEEzbFhk5dCw8QhQAHmVld01M-BhMQEEQWt1kdMxMfHZ8HJl3NSltPUMTMyycvO4RR0oXMDcoh3Bp1wlpTx8-QJCYcJXNOH0sfH1TDOxs3JhMs3rAYRBASRB8etxMIsy4-B6o8uV+5vkipQoS61W4PJ6YG74XALZzLdz5ZCFRQlb5VZqANhBsEgboBOECe2AANDB6ldAOIgWLMaGw+nwgGYQOJPfRxfS4gj1FAyLiTRYzOYcT4cb6-REKYqoYn3R7PSHQiZTXkrGFLWaRfmyEUAlEVKo1dr6HI4mC6amIhH-ZGoVFRGK2GA3eq6fCACRBMggYEZcFY4qLukQgA)
- [Страница регистрации](https://sequencediagram.org/index.html#initialData=IYYwLg9gTgBI+CCD4QQ3CCBkQQ7CAMEwggGEEEIghWEFQCgAHYKMASxErIDswZACEH0GYQQDhBBBEF0AEQbQMRB2geRAiAE2BhgAI2ABnAKYxAiCCAUECJFEqDDgKoAtAD4WHbn0FCAXAlyB+ED6ZAXCDYYgERAEPQDwggaRB1oKgDcJRWMuXgFhdSkIAA8YKEoAcwALRggAM2Y2ULNhCxwkdkAWEHChGGLAXhByr0BREHVNdCw8QhQAHj09ENMSi3L8GExOPptkUsxMfEL8Ko1kBp1mto6srvMLG2weZHYYXphOLHXiwDkQXBmtRt1W9s6w1d67bEx2VHKEPvYPUuHz+aQReu0TVQixuOUsnAKgAkQBwIDwwDzYJBTFAOdiAThAYOtNsR1OpQSVDKorLZ7E4ythKjV1KJ5H5KIEwMFlrcIkQ6QzFKpIjE4okUjB0soVBY4JtxjwyRUqtUds5OIBhEEAkiD4biYRrldj4PHMsGLInfOZAlB7JUq3CYeX4U5s8D0oKZEwskRnQ2XEE67qADBBPpjZoDdKU0BShLgENTabaOQ7siVtY7de19X6Ls0dn0FcrVZbcAAacmUvqFBCARhBHkjpmIIwF7VybdXGdGVqyASngdcPatMF4YPLODZ8JDXjAgzwdewxRSfJX2fb8eYiEA)
- [Страница восстановления пароля](https://sequencediagram.org/index.html#initialData=IYYwLg9gTgBI+CCD4QQ3CCBkQQ7CAMEwggGEEEIghWEFQCgAHYKMASxErIDswZAkEAUEEQV3bQXhAsl8vAHCD4YgfhBsgARBkgeRAiAE2BhgAI2ABnAKYxAiCCAUECJFEqDDgKoAtAD4W7Tj0x9BwsZKRSAXAlwjx2TIC4QbBhAERAEcUAeEEBpEH1QKgA3BU1rDm5efiFRCWl9JQgADxgoSgBzAAtGCAAzZjZkuwd052k3HCQBQBYQbEAxEAEpGA6uLgjAURB9Q3QsPEIUAB4zMyTbVMcMl3cuYUxWJ2kYTEx8Nv4og2RxkynZ+ZrF+zSnTNc3RtaYdZhWLDEOwDkQXFHT4yTVCXBYpW7LZ5rfDeXwCVA8YQCMK9EQAiamGQnIzoi5zUF1O4rJqsVqACRA-AgwjAwtgHCg-AJAJwgROI+iI+KWDQeUksug8Xh8-kC-UGIzk6hilHiYES1zB9Xuq2i4ClCW0eiIOXyhVK5SqfLgkn24gCfW4otegVYgGEQQCSIPgOJgJo59BzwVzVpc+ajsedUK9hDb7Y7rfg-kRJdLZTZ5YTIf9fUCZni5QSIdynmi-SgAzA0BJ8IBmEAEHHEAiN3H0sglKqj1RjaY9WXZqc5iukXp0mcTphzQYduEwofD1cjat0yriardCpZmLGgN7INb7vbj3WMMwcJQCJgnEZu5JWAQCbOSeXDbbc6eDxz1tYInwpJ4MAQgEYQNNVmtTmX12pX+MgA)
## [API сервера и хореография](https://sequencediagram.org/index.html#initialData=IYYwLg9gTgBI+CCD4QQ3CCBkQQ7CAMEwggGEEEIghWEFQCgAHYKMASxErIDswZBCEH0AEQTNooxVDHA1AFoAfC3ZsAXJkCiIAkAsIDEwwkgDhBA4iCBeEEDSIIE4QGIC4QbIEYQFRvy4uoKgDdgYAKbM2HVlx7oseQihFiXUrVkFFTRldQ0EQGYQBANjU3NsbmQPfm8AHkFBP0lAfhA2fGw5VnxAQRBsQDEQFUB5EBgNbBgS3FZsDRVywGEQGGLIlUbmypUuIgATeytKWwcncVck3k8BH1FnXPyg2vq+lrbO1U0omMMTM1x6o3xQ7ExcBFYQipVB8cnHbNd3Pi9UDKyV1glAMQgimwJVq5hgOWaSjkCEa7Ry2AANBD8oVimVKjU6g0mtsOjArjc7mgHoNRs87K8-kQgA)
##   Структура базы данных

| столбец | характеристика |
| ------ | ------ |
| login | логин, VARCHAR(32), UNIQUE |
| password | хэшированный пароль, VARCHAR(1024)|
| secret | хэшированное секретное слово для восстановления пароля, VARCHAR(1024), NOT NULL |
| id | уникальный идентификатор пользователя, INT, AUTO_INCREMENT, PRIMARY KEY, NOT NULL |

 ## [Алгоритмы](https://viewer.diagrams.net/?tags=%7B%7D&highlight=0000ff&edit=_blank&layers=1&nav=1&title=%D0%94%D0%B8%D0%B0%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0%20%D0%B1%D0%B5%D0%B7%20%D0%BD%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F.drawio#R7V1Zd6M2FP41eZwchFgf463N6XQ6p0lPJ4%2BMTWxabFyMm7i%2FvgKEEJKwZbMIOzMPHiQLge9%2BP10pd3C8fv8p9rarX6OFH97p2uL9Dk7udB1Aw0H%2FpT2HvMe2Yd6xjIMFHlR2PAX%2F%2BbhTw737YOHvKgOTKAqTYFvtnEebjT9PKn1eHEdv1WGvUVh96tZb%2BlzH09wL%2Bd4%2Fg0Wywr3AcssvfvaD5Qo%2F2tHt%2FIu1VwzGv2S38hbRG9UFp3dwHEdRkl%2Bt38d%2BmBKvoEt%2B36zmW%2FJisb9JZG54jJJfIHB3IVy8bJaH2HgLHz%2FhWf71wj3%2Bwbtgudlv8Ssnh4IOb6sg8Z%2B23jxtvyFe38HRKlmHqAXQpbfb5tR%2FDd599MARntePE%2F%2B99oUBIQOSHz9a%2B0l8QEPwDQYmHJYcXcPtt5IPDu5a0RzAfR7m%2FJJMXBIHXWD6nEErS%2BeIxZHJXyDpwc0oTlbRMtp44bTsHcXRfrNISTTRUKsc8zmKtpiYf%2FlJcsCq4O2TqErqXRJHf%2FvjKIzi7JlQM0YzoBGap69wnOLojaN9PPeP%2FFaspIkXL%2F3kGE1qWBj7oZcE%2F1ZfpHWOQI4hsT%2BPkNAdBii%2Frmr5NZSIq%2F8eJN%2Bo65d0qnsTtybveOasccCNXkTcaCi5%2BNavUYCeTJhOrBTmumUw7MxVCt%2FFcJS8RgMmcyoRRstgM0B9sFTrgylhzjeLhzSIQK156O12wbxKpqp2yAonTyGKBKaABEVfQ9kEOuNRWdnMdYaTzZNCzk1UI%2BSIlt6BGrZNB%2BzOf%2BGS6%2FmMrWqQxYsF4q47u0McR7KIrkfT7DPrH5lU%2F0P2id4xb07EzfRzlH062b12cZ3NptNTjbIBU2pYNptu%2FbNPw8bRercsG5z0xqto%2FX2PaD06oe0tKDcrEsDR701OvwlDaekGwOxIw%2B22NbxwZqUDe6Fcm9iZvQZhSLmyhec7r%2FO%2BnJyl0t4YoCoT0L7U3ljMRLCpvWnb7bpCo5GaCKS5I8pc5KbDyNQcfQUqnaw9sSjLMKZGQnzdoq1A2ek2vUyy%2F04ZjFx2i4RYT3vy%2BE%2B7BwUpGlkTvYbhtC3R%2BgwWClGWtCWbaOMfMyTNlV%2BVUkOWNdaFSg2tfoII9jlFu9MgAvDASkuup1EeNZtp6N8tuxjzQmk0LgxpWxMYQdipIFtvUS4AFAtGQ45bqhnFg05ZfqDXOHni2OkkYFLEBejTrA7LO2dFgKAVQQFx%2B04ROKBPnRqTj6dDBqfWyyN%2BemHoh9Ey9tanXPvWjwNENT9mb%2FxafiEMGEppzCCFeI7FDlQCBh22k4FAlxEMIIgZLIEpYh1YezGDMwid7sULFDncScQY2A3NQjPEmNeJgWKgiAPx4RvdoO5Km%2BVtWatX7FSa29RKlwJuAwHEV9pqBomhDTVtSIk1lrHklyIwvNU9ajxbMJecHxXAsT2nWAK4JuWWQflUQDFAp%2FhnUixpA0krnlBJ003K8wJKPKY146fFZ%2B6pGchQr%2Fpx8i39%2BtkAXaPmcagxgPp9%2BbNcTgIHJ3cm46ZNgdiJUMLuvLQAu2mWqtU7XIIfnuEI2jTbNb63n1yN5TyxOOfmas6JeVoCDpjHOD3ABpBX4B%2FhyflyXtiP0%2BFJ00XgRpaneE3G4T2YlJdwKD%2FDLz5p9W5vRsUy9I2jakTjcC4udyl06kkc1OQiDHroHslmgUhR4gj7dEmQX8VXYRfqdfVS7W9Txw1JHYc1AGVDb2Yz3sxgF7e6LvTgNatHV1FdANXkXAU4T1iyFoUx9Qdpy8uW0vTWAMMRgeNr4KW9KLn%2BUmF6ExHoJISQFQHdURpC8J7i8cvT9Pdn1Pf45fm3%2B%2Fv7jh3wwtutyHcteGOgscCEyB33miHqAhw3BSYAhidYAvMUpMmLIfj1%2BzKtmL9%2FDaO3%2BcqLk%2FuFl3jfvZ1fgxa1QltYpS1ZzKVo2ytEDsUhsHtW4QSBhlC%2FK4KD6IC3GCyFqpBoughmy8jaqcBAFQCITEJWgJwK1EgeXfkt9C9ioni6PqQu0Bb%2B5Jrln2EUeTjM2i0QIZCuQBrZSKs9aeQXYbdx9Bog%2Bp1pRLuonwWDq6A1ZEpob2RHhCG7JcJQiikYMjWPN7LmKM%2BSpilgM5bUVAxcYUXxpZGNPw92QbTpLrJhy49NRzJoJJ3ts10A4pwd2txGTWhLQB3LZFsQvQqZ3N0WEpmqUBUOUOvA2lqy1tZVam1r9m90UZ%2BlFRXeJqeyPDpXV3t1cXkVJQBZlFlk5UJdbEH92BJJSzlObsgUWH3Eomy7raJs2e2LTYuy7T6Ksk19mNa6k9jYlbTWptId3OZHyiClWaI2gxTvZbqKorkWvJxlMpmEK9jGqJm8KXc7CzKhCpW4pFTp0mWeXiyiWRwfczJ%2BVWoQBRuHJh%2B1CJIqTum3CLINO2KQDdCk0lH1Qpb5gcBBU3YB11QKDpoy1ac3EgDJs0TpmrrJA3dP08%2FT8bNoMb26Nn62oWl79dzRbcbqCLP0fq1OPSLzY41X8RpvVXy7h3B5%2BTRkNwAAtsy7vYPdlJbS3UzVtelImvfGFZnNzJG4mueB1k27JnHl9ubURsS0EaCRYmLoyIKOQz2xrrb7SOE1bT1yizGun5C8gFnFstt1ai3YCaAN0JFZQy%2FLblGZLdls2Wq6zb8ZS4ZxbEI%2FB21Is8RUypIaBOMKyx3UIpGA2WHguOojpfrDL26zpoEOf3thMtBsSS53hjdbQ4UkOihqsGQPMrCUQhLW0YMMuihqIEEqoD75wJQ25EIQmp725JbEGl292ooJ9kgaVxTC2r2GsOcdiXl5xcRF2S1qsJt92tT1mki1pxINyBr6S7e%2Fs7UTbk81GqA4qLXTIg1b5uS8W4noZRETW%2Bk%2BQ%2Fsj5b3SLFGb99ZsSfsoRRrs2RyCIg23zxoNW4lG3FyNRhELnYaQldrDmk2LP2o0qHmuokbDYkFmR3ZLQWcRuj1QRLMLZ2vLbuCylSKathj16umcHtbxKl%2BbcbjKJmFe26%2FWKD3X85yjMPpRLFlYy1Z6GqsjcKQ3a%2BukWaJ0%2B5TNI41%2FfJ08PE%2BvoPgJaEO0TDWnml7h4SE2S93yPBFV54c4AzoC6fgpWDKHqVUzMnJcVveHqdmyW1O6%2BaN5nwwIK4JlN%2F4DP%2BIHAahVH%2BRolX1np88A7WGbWsGMK00vSSp4bgUn6RlTmaRW1HGiuyA154x6kyIOH16oDPRePRJqln9POBfH8q8yw%2Bn%2F)
 
 
  ## Пример HTTP запросов/ответов
  
### GET
URL-адрес запроса: http://localhost/
Метод запроса: GET
Код состояния: 200 OK
Удаленный адрес: 127.0.0.1:80
#### Запрос:
GET / HTTP/1.1
Accept: \*/*
Accept-Encoding: gzip, deflate, br
Cache-Control: no-cache
Connection: keep-alive
Cookie: PHPSESSID=eq5rjqch4qt5sftuab760anenc
Host: localhost
Pragma: no-cache
User-Agent: PostmanRuntime/7.29.2
#### Ответ:
HTTP/1.1 200 OK
Date: Tue, 25 Oct 2022 11:29:32 GMT
Server: Apache/2.4.52 (Ubuntu)
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 725
Keep-Alive: timeout=5, max=99
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
### GET
URL-адрес запроса: http://localhost/login.php
Метод запроса: GET
Код состояния: 200 OK
Удаленный адрес: 127.0.0.1:80
#### Запрос:
GET / HTTP/1.1
Accept: \*/*
Accept-Encoding: gzip, deflate, br
Cache-Control: no-cache
Connection: keep-alive
Cookie: PHPSESSID=eq5rjqch4qt5sftuab760anenc
Host: localhost
Pragma: no-cache
User-Agent: PostmanRuntime/7.29.2
#### Ответ:
HTTP/1.1 200 OK
Date: Tue, 25 Oct 2022 11:54:34 GMT
Server: Apache/2.4.52 (Ubuntu)
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 717
Keep-Alive: timeout=5, max=100
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
### GET
URL-адрес запроса: http://localhost/login_index.php
Метод запроса: GET
Код состояния: 200 OK
Удаленный адрес: 127.0.0.1:80
#### Запрос:
GET / HTTP/1.1
Accept: \*/*
Accept-Encoding: gzip, deflate, br
Cache-Control: no-cache
Connection: keep-alive
Cookie: PHPSESSID=eq5rjqch4qt5sftuab760anenc
Host: localhost
Pragma: no-cache
User-Agent: PostmanRuntime/7.29.2
#### Ответ:
HTTP/1.1 200 OK
Date: Tue, 25 Oct 2022 12:06:35 GMT
Server: Apache/2.4.52 (Ubuntu)
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Location: ../login.php
Content-Length: 0
Keep-Alive: timeout=5, max=100
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
### GET
URL-адрес запроса: http://localhost/signup.php
Метод запроса: GET
Код состояния: 200 OK
Удаленный адрес: 127.0.0.1:80
#### Запрос:
GET / HTTP/1.1
Accept: \*/*
Accept-Encoding: gzip, deflate, br
Cache-Control: no-cache
Connection: keep-alive
Cookie: PHPSESSID=eq5rjqch4qt5sftuab760anenc
Host: localhost
Pragma: no-cache
User-Agent: PostmanRuntime/7.29.2
#### Ответ:
HTTP/1.1 200 OK
Date: Tue, 25 Oct 2022 12:34:34 GMT
Server: Apache/2.4.52 (Ubuntu)
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 725
Keep-Alive: timeout=5, max=100
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
### GET
URL-адрес запроса: http://localhost/signup_index.php
Метод запроса: GET
Код состояния: 200 OK
Удаленный адрес: 127.0.0.1:80
#### Запрос:
GET / HTTP/1.1
Accept: \*/*
Accept-Encoding: gzip, deflate, br
Cache-Control: no-cache
Connection: keep-alive
Cookie: PHPSESSID=eq5rjqch4qt5sftuab760anenc
Host: localhost
Pragma: no-cache
User-Agent: PostmanRuntime/7.29.2
#### Ответ:
HTTP/1.1 200 OK
Date: Tue, 25 Oct 2022 12:39:12 GMT
Server: Apache/2.4.52 (Ubuntu)
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Location: ../signup.php
Content-Length: 0
Keep-Alive: timeout=5, max=100
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
### GET
URL-адрес запроса: http://localhost/recovery.php
Метод запроса: GET
Код состояния: 200 OK
Удаленный адрес: 127.0.0.1:80
#### Запрос:
GET / HTTP/1.1
Accept: \*/*
Accept-Encoding: gzip, deflate, br
Cache-Control: no-cache
Connection: keep-alive
Cookie: PHPSESSID=eq5rjqch4qt5sftuab760anenc
Host: localhost
Pragma: no-cache
User-Agent: PostmanRuntime/7.29.2
#### Ответ:
HTTP/1.1 200 OK
Date: Tue, 25 Oct 2022 12:46:12 GMT
Server: Apache/2.4.52 (Ubuntu)
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 724
Keep-Alive: timeout=5, max=100
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
### GET
URL-адрес запроса: http://localhost/recovery_index.php
Метод запроса: GET
Код состояния: 200 OK
Удаленный адрес: 127.0.0.1:80
#### Запрос:
GET / HTTP/1.1
Accept: \*/*
Accept-Encoding: gzip, deflate, br
Cache-Control: no-cache
Connection: keep-alive
Cookie: PHPSESSID=eq5rjqch4qt5sftuab760anenc
Host: localhost
Pragma: no-cache
User-Agent: PostmanRuntime/7.29.2
#### Ответ:
HTTP/1.1 200 OK
Date: Tue, 25 Oct 2022 12:48:17 GMT
Server: Apache/2.4.52 (Ubuntu)
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Location: ../recovery.php
Content-Length: 8
Keep-Alive: timeout=5, max=100
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8
### GET
URL-адрес запроса: http://localhost/hello.php
Метод запроса: GET
Код состояния: 200 OK
Удаленный адрес: 127.0.0.1:80
#### Запрос:
GET / HTTP/1.1
Accept: \*/*
Accept-Encoding: gzip, deflate, br
Cache-Control: no-cache
Connection: keep-alive
Cookie: PHPSESSID=eq5rjqch4qt5sftuab760anenc
Host: localhost
Pragma: no-cache
User-Agent: PostmanRuntime/7.29.2
#### Ответ:
HTTP/1.1 200 OK
Date: Tue, 25 Oct 2022 12:53:56 GMT
Server: Apache/2.4.52 (Ubuntu)
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate
Pragma: no-cache
Location: ../login.php
Content-Length: 252
Keep-Alive: timeout=5, max=100
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8

## Значимые фрагменты кода([исходный код](https://github.com/Galimimus/laba_1))
### Проверка на существование пользователя в базе данных(login_index.php)
```
$sql = "SELECT password FROM users WHERE login='$user'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result);


    if ($row === "") {

        $err = "Пожалуйста, сначала зарегистрируйтесь";
        $_SESSION["msg"] = $err;
        mysqli_close($link);
        header("Location: signup.php", true, 303);

    }else{

        if(!strcmp($pass, $row['password'])){

            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;       
            $_SESSION["msg"] = "";
            mysqli_close($link);
            header("Location: hello.php", true, 303);

        }else{

            $err = "Неверный пароль<br>";
            $_SESSION["msg"] = $err;
            mysqli_close($link);
            header("Location: login.php", true, 303);

        }
    }
```
### Проверка на уникальность логина и запись в базу данных нового пользователя(signup_index.php)
```
$sql = "SELECT password FROM users WHERE login='$user'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result);

    if ($row == "") {
        $secret = md5($secret);
        $sql = "INSERT INTO users (login, password, secret) VALUES ('$user', '$pass', '$secret')";
        $result = mysqli_query($link,$sql);

        if ($result == false) {

            print("Произошла ошибка при выполнении запроса");

        }else{

            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;       
            $_SESSION["msg"] = "";
            mysqli_close($link);
            header("Location: hello.php", true, 303);

            }
    }else{

            $err = "Имя пользователя занято";
            $_SESSION["msg"] = $err;
            mysqli_close($link);
            header("Location: signup.php", true, 303);

    }
```
### Проверка на корректность введенных данных для сброса пароля(recovery_index.php)
```
if($user===""||$pass===""||$secret==""||$pass_repeat=""){

    $err = 'Не все поля введены';
    $_SESSION["msg"] = $err;
    header("Location: recovery.php", true, 303);

}else if(!strcmp($pass,$pass_repeat)){

    $err = 'Пароли не совпадают';
    $_SESSION["msg"] = $err;
    header("Location: recovery.php", true, 303);

}else if(strlen($user)<2 || strlen($user)>32){

    $err = 'Неправильное имя пользователя';
    $_SESSION["msg"] = $err;
    header("Location: recovery.php", true, 303);

}else if(strlen($pass)<6){

    $err = 'Слишком маленький пароль';
    $_SESSION["msg"] = $err;
    header("Location: recovery.php", true, 303);
    
}

...

$sql = "SELECT secret FROM users WHERE login='$user'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result);

    if ($row == "") {

        $err = "Пользователь не зарегистрирован";
        $_SESSION["msg"] = $err;
        mysqli_close($link);
        header("Location: recovery.php", true, 303);

    }else{

        if(!strcmp($row['secret'], $secret)){
        
        ...

        }else{
            $err = "Неправильное тайное слово";
            $_SESSION["msg"] = $err;
            mysqli_close($link);
            header("Location: recovery.php", true, 303);
        }
    }
```
### Проверка на авторизованность пользователя(hello.php)
```
<?php
    session_start();
    if (!isset($_SESSION["user"]) || !isset($_SESSION["pass"])){
        $_SESSION["msg"] = "У вас нет прав доступа";
        header("Location: login.php", true, 303);
    }
?>
```
### Сообщение пользователю информации(login.php, signup.php, recovery.php)
```
<?php
    session_start();
    if(isset($_SESSION["msg"])){
        print($_SESSION["msg"]);
        session_destroy();
    }
?>
```

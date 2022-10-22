# HTTP аутентификация
## Задание
Спроектировать и разработать систему авторизации пользователей на протоколе HTTP
## [пользовательский интерфейс](https://www.figma.com/file/VOymgyIiUEpZEu44eiaEL3/signup?node-id=5%3A9)
## Пользовательские сценарии работ
- [Страница авторизации](https://sequencediagram.org/index.html#initialData=IYYwLg9gTgBI+CCD4QQ3CCBkQQ7CAMEwggGEEEIghWEFQCgAHYKMASxErIDswZAkEEFEQBQFhAiATYMYAI2ABnAKYxAiCCAUECJFEqDDgKoAtAD5WHAFwJcgfhBAAiDZMgLhBsMQCIgCfYB4QQNIgM0FQBuvMRs5F+EAB4wolAHMAC0YIADNmNnZNHCRADhB2bEAxEDjAeRAYRMBeEEzbFhk5dCw8QhQAHmVld01M-BhMQEEQWt1kdMxMfHZ8HJl3NSltPUMTMyycvO4RR0oXMDcoh3Bp1wlpTx8-QJCYcJXNOH0sfH1TDOxs3JhMs3rAYRBASRB8etxMIsy4-B6o8uV+5vkipQoS61W4PJ6YG74XALZzLdz5ZCFRQlb5VZqANhBsEgboBOECe2AANDB6ldAOIgWLMaGw+nwgGYQOJPfRxfS4gj1FAyLiTRYzOYcT4cb6-REKYqoYn3R7PSHQiZTXkrGFLWaRfmyEUAlEVKo1dr6HI4mC6amIhH-ZGoVFRGK2GA3eq6fCACRBMggYEZcFY4qLukQgA)
- [Страница регистрации](https://sequencediagram.org/index.html#initialData=IYYwLg9gTgBI+CCD4QQ3CCBkQQ7CAMEwggGEEEIghWEFQCgAHYKMASxErIDswZACEH0GYQQDhBBBEF0AEQbQMRB2geRAiAE2BhgAI2ABnAKYxAiCCAUECJFEqDDgKoAtAD4WHbn0FCAXAlyB+ED6ZAXCDYYgERAEPQDwggaRB1oKgDcJRWMuXgFhdSkIAA8YKEoAcwALRggAM2Y2ULNhCxwkdkAWEHChGGLAXhByr0BREHVNdCw8QhQAHj09ENMSi3L8GExOPptkUsxMfEL8Ko1kBp1mto6srvMLG2weZHYYXphOLHXiwDkQXBmtRt1W9s6w1d67bEx2VHKEPvYPUuHz+aQReu0TVQixuOUsnAKgAkQBwIDwwDzYJBTFAOdiAThAYOtNsR1OpQSVDKorLZ7E4ythKjV1KJ5H5KIEwMFlrcIkQ6QzFKpIjE4okUjB0soVBY4JtxjwyRUqtUds5OIBhEEAkiD4biYRrldj4PHMsGLInfOZAlB7JUq3CYeX4U5s8D0oKZEwskRnQ2XEE67qYLwweWANhA+mgNjr2GKKT4xLTbRyHdkStrHbr2vrZoDLjs+grlarLbgADTkyl9QoIQCMII8kdMI+z7VybQF7fjzHUUxcFtcPasvT7ODZ8JDXjBAzxg6HKzTq4yYysIkA)
- [Страница восстановления пароля](https://sequencediagram.org/index.html#initialData=IYYwLg9gTgBI+CCD4QQ3CCBkQQ7CAMEwggGEEEIghWEFQCgAHYKMASxErIDswZAkEAUEEQV3bQXhAsl8vAHCD4YgfhBsgARBkgeRAiAE2BhgAI2ABnAKYxAiCCAUECJFEqDDgKoAtAD4W7Tj0x9BwsZKRSAXAlwjx2TIC4QbBhAERAEcUAeEEBpEH1QKgA3BU1rDm5efiFRCWl9JQgADxgoSgBzAAtGCAAzZjZkuwd052k3HCQBQBYQbEAxEAEpGA6uLgjAURB9Q3QsPEIUAB4zMyTbVMcMl3cuYUxWJ2kYTEx8Nv4og2RxkynZ+ZrF+zSnTNc3RtaYdZhWLDEOwDkQXFHT4yTVCXBYpW7LZ5rfDeXwCVA8YQCMK9EQAiamGQnIzoi5zUF1O4rJqsVqACRA-AgwjAwtgHCg-AJAJwgROI+iI+KWDQeUksug8Xh8-kC-UGIzk6hilHiYES1zB9Xuq2i4ClCW0eiIOXyhVK5SqfLgkn24gCfW4otegVYgGEQQCSIPgOJgJo59BzwVzVpc+ajsedUK9hDb7Y7rfg-kRJdLZTZ5YTIf9fUCZni5QSIdynmi-SgAzA0BJ8IBmEAEHHEAiN3H0sglKqj1RjaY9WXZqc5iukXp0mcTphzQYduEwofD1cjat0yriardCpZmLGgN7INb7vbj3WMMwcJQCJgnEZu5JWAQCbOSeXDbbc6eDxz1tYInwpJ4MAQgEYQNNVmtTmX12pX+MgA)
## [API сервера и хореография](https://sequencediagram.org/index.html#initialData=IYYwLg9gTgBI+CCD4QQ3CCBkQQ7CAMEwggGEEEIghWEFQCgAHYKMASxErIDswZBCEH0AEQTNooxVDHA1AFoAfC3ZsAXJkCiIAkAsIDEwwkgDhBA4iCBeEEDSIIE4QGIC4QbIEYQFRvy4uoKgDdgYAKbM2HVlx7oseQihFiXUrVkFFTRldQ0EQGYQBANjU3NsbmQPfm8AHkFBP0lAfhA2fGw5VnxAQRBsQDEQFUB5EBgNbBgS3FZsDRVywGEQGGLIlUbmypUuIgATeytKWwcncVck3k8BH1FnXPyg2vq+lrbO1U0omMMTM1x6o3xQ7ExcBFYQipVB8cnHbNd3Pi9UDKyV1glAMQgimwJVq5hgOWaSjkCEa7Ry2AANBD8oVimVKjU6g0mtsOjArjc7mgHoNRs87K8-kQgA)
##   Структура базы данных

| столбец | характеристика |
| ------ | ------ |
| Dropbox | [plugins/dropbox/README.md][PlDb] |
| GitHub | [plugins/github/README.md][PlGh] |
| Google Drive | [plugins/googledrive/README.md][PlGd] |
| OneDrive | [plugins/onedrive/README.md][PlOd] |
| Medium | [plugins/medium/README.md][PlMe] |
| Google Analytics | [plugins/googleanalytics/README.md][PlGa] |

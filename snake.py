import requests
import json

url = "http://127.0.0.1:5500/capolavoro/getlogin.html?#"

data = {
    "Nome": "Erminio",
    "Cognome":"Ottone",
    "Data_nascita":"1994-10-04",
    "email":"niagara66@craiglist.com"
}
{
    "Nome": "Luffy",
    "Cognome":"D. Onepis",
    "Data_nascita":"199X-01-01",
    "email":"ulysse@gmail.com"
}

headers = {'Content-Type': 'application/json'}

response = requests.post(url, data=json.dumps(data), headers=headers)

print(response.json())
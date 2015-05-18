import requests
from requests.auth import HTTPDigestAuth
import json

$username = '685000028568712'
$password = 'MIj9IP8EXh02uNz3vCRsSmLssu9UlWu6'
$domain = 'bardsimonsrock'
headers = {'content-type':'application/json'}

# Create a JSON object with the following attributes:
# 	First Name: Cersei
# 	Last Name: Lannister:
# 	Email: cersei.lannister@hobsons.com
contact = {
	"createFields": {
		"First Name":"delete_michael",
		"Last Name":"delete_lifecycle",
		"Email":"delete_lifecycle@test.com",
	}
}

# Send the Contact JSON object to Radius
r = requests.post('https://' + domain + '.hobsonsradius.com/crm/webservice/modules/Contacts/', auth=HTTPDigestAuth(username, password), headers=headers, data=json.dumps(contact))

# The response to the previous request returns a JSON object.
# This JSON object will contain an Entity ID for the newly created contact.
# The line below captures the Entity ID for the new contact.
entity_id = int(json.loads(r.text)['payload']['entity']['Entity ID'])

# Create a new lifecycle for the above contact using the captured Entity ID.
lifecycle = {
	"createFields": {
		"Contact":entity_id,
		"Lifecycle Role":"Prospect",
		"Lifecycle Stage":"Open",
		"Primary Role":True
	}
}

# Send the Lifecycle JSON object to Radius
# This will create a new Lifecycle for the newly created contact
r = requests.post('https://' + domain + '.hobsonsradius.com/crm/webservice/modules/LifeCycles/', auth=HTTPDigestAuth(username, password), headers=headers, data=json.dumps(lifecycle))
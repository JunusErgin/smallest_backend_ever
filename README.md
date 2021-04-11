# Smallest Backend ever
- Easiest way for creating a key/value Store on a (FTP) Server
- PHP based
- Store a e.g. a JSON-Array on a Server
- Just upload the php file
- Caution: No security at all

## Caution
There is no security layer implemented. This tool should not be used for production systems and is no replacement for a real middleware system with based on a framework and with a real database. 

## Getting started
### Server
- Upload the whole project forder ```smallest_backend_ever``` file to your FTP server
- Change the folder rights to 777

### Frontend
- Add the file ```mini_backend.js``` to your project
- Include the JS file to your project: ```<script src="./mini_backend.js"></script>```
- Set the URL to in your JavaScript to the URL of the PHP file on your Server: ```setURL('http://developerakademie.com/smallest_backend_ever');```
- Load, save and delete text similar to the ```localStorage``` API
- You might need to install a plugins to bypass CORS, e.g.  [this one](https://chrome.google.com/webstore/detail/allow-cors-access-control/lhobafahddgcelffkeicbaginigeejlf)
- Use a [live server](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer) for local Development

## Examples
If you want to see a full working example, open the file ```example.html```.
Imagine we're having an array of users:
```
let users = [];
```

### Save
Add a user with this function:
```
function addUser() {
    users.push('John);
    backend.setItem('users', JSON.stringify(users));
}
```

If you want to wait for the request you can add the `await` keyword as well:

Add a user with this function:
```
async function addUser() {
    users.push('John);
    await backend.setItem('users', JSON.stringify(users));
}
```

### Load
Fill your empty array with users from the Server
```
async function init() {
    await downloadFromServer();
    users = JSON.parse(backend.getItem('users')) || [];
}
```

### Delete
Delete all users from your array:
```
function deleteUser(name) {
  backend.deleteItem('users');
}
```

## Background
This projekt was created to explain the usage of a Library and basic HTTP functions for students of Developer Akademie. 


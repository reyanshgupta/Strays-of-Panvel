var express = require('express');
var connection = require('./db')
var app = express();
var bodyParser = require('body-parser')
const port = 5500;
app.get('/adopt',function(req,res){
    res.sendFile(__dirname+'../HTML/adoption-form.html');
})

app.post('/add', (req, res) => {
    var name = req.body.name;
    var email = document.adopt.email.value;
    var phone = document.adopt.phone.value;
    var petname = document.adopt.petname.value;
    var petage = document.adopt.petage.value;
    var petbreed = document.adopt.petbreed.value;
    const sql = `INSERT INTO adoptionrequests VALUES ('${name}', '${email}', '${phone}',  '${petname}', '${petage}', '${petbreed}',)`;
    connection.query(sql, (err, result) => {
        if (err) throw err;
        alert('Request Raised Successfuly!');
        res.send("Request Raised")
        res.redirect('');

    });
    });
    // Start the server
    app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
    });
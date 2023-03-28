const mysql = require('mysql');
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'straysofpanvel'
});

connection.connect((err) => {
  if (err) throw err;
  console.log('Connected!');
});


// var name = document.adopt.fname.value+document.adopt.lname.value;
// var email = document.adopt.email.value;
// var phone = document.adopt.phone.value;
// var petname = document.adopt.petname.value;
// var petage = document.adopt.petage.value;
// var petbreed = document.adopt.petbreed.value;
// const express = require('express');
// const app = express();
// const port = 3306;
// app.post('/add', (req, res) => {
//   const sql = `INSERT INTO adoptionrequests VALUES ('${name}', '${email}', '${phone}',  '${petname}', '${petage}', '${petbreed}',)`;
//   connection.query(sql, (err, result) => {
//       if (err) throw err;
//       console.log('Request Raised Successfuly!');
//       res.redirect('');
//   });
//   });

// // Start the server
// app.listen(port, () => {
//   console.log(`Server running at http://localhost:${3306}`);
// });

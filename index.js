const express = require('express')
const app =express()
const PORT = process.env.PORT || 3000
const path = require('path')
const mongoose = require('mongoose')


// app.set('view engine', 'ejs');

// mongoose.connect('mongodb+srv://pratik52:#KokrudFC007@cluster0.tnefx.mongodb.net/mandrupkar-clinic?retryWrites=true&w=majority',
//   {
//     useNewUrlParser: true,
//     // useFindAndModify: false,
//     useUnifiedTopology: true
//   }
// );



// const CustomerSchema = new mongoose.Schema({
//   fname: String,
//   AccBalance: String,

// });


// const Customer = mongoose.model('Login',CustomerSchema);


app.use(express.static(__dirname + '/public'))
app.use(express.urlencoded())
app.get('/', (req, res) => {
    res.sendFile(__dirname + '/index.html')
})

app.get('/blog', (req, res) => {
  res.sendFile(__dirname + '/blog.html')
})

app.get('/admin-login', (req, res) => {
  res.sendFile(__dirname + '/adminlogin.html')
})
// app.get('/admin-login', (req, res) => {
//   res.render('adminlogin.html')
// })



const connection = mongoose.connection;
mongoose.connection.on('connected', ()=>{
  console.log("Connected ")
})

mongoose.connection.on('error', (err)=>{
  console.log("error connecting", err)
})

app.listen(PORT, () => {
  console.log(`Listening on port ${PORT}`)
})
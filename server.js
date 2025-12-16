    const express = require('express');
const app = express();
const PORT = process.env.PORT || 3000;

app.get('/', (req, res) => {
    res.send('Hello from Backend! Main Branch Version.');
});

app.get('/api/data', (req, res) => {
    res.json({ message: "Dữ liệu từ Database giả lập", status: "success" });
});

app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
    const express = require('express');
    const app = express();
    const port = process.env.PORT || 3000;
    
    // const path = require('path');
    // app.get('/', (req, res) => {
    //     res.sendFile(path.join(__dirname, '../public', 'index.html'));
    // });

    app.use(express.static('public'));

    // Allow front-end access to node_modules folder
    app.use('/scripts', express.static(`${__dirname}/node_modules/`));

    app.listen(port, () => console.log('listening at 3000'));
    

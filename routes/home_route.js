const express = require('express');
const ctrl = require('../controllers/home_ctrl');
const router = express.Router();

router.get('/', ctrl.getIndex);

router.get('/about', ctrl.getAbout);

router.get('/explore', ctrl.getExplore);

module.exports = router;

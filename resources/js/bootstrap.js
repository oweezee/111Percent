import _ from 'lodash';
window._ = _;

import 'bootstrap';
import * as bootstrap from 'bootstrap';

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


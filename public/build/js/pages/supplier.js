import {viewAllSupplier} from './supplier/initSupplier.js';
import{initAction} from './supplier/initActionSupplier.js';

document.addEventListener("DOMContentLoaded", function () {
	viewAllSupplier(); //Load Supplier List
	initAction();//Validate & Submit form
});
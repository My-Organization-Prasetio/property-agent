import {viewAllOutlet} from "./outlet/initOutlet.js";
import {initAction} from "./outlet/initActionOutlet.js";

document.addEventListener("DOMContentLoaded", function () {
	viewAllOutlet(); //Load Outlet List
	initAction();//Validate & Submit form
});
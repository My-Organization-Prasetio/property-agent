import {viewAllMaterial} from "./material/initMaterial.js";
import {initAction} from "./material/initActionMaterial.js";

document.addEventListener("DOMContentLoaded", function () {
	viewAllMaterial(); //Load Material List
	initAction();//Validate & Submit form
});
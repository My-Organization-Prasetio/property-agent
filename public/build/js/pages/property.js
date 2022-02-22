import {viewAllProperty} from "./property/initProperty.js";
import {initAction} from "./property/initActionProperty.js";
import {initActionStepsAdd} from "./property/initActionStepsProperty.js";

document.addEventListener("DOMContentLoaded", function () {
	viewAllProperty();
	initAction();
    initActionStepsAdd();
});
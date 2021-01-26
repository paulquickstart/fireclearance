const ADMIN_TYPE    = 1;
const CLIENT_TYPE   = 3;
const ALLOWED_ADMIN = 1;
const ALLOWED_CLIENT = 3;

const SUPER_ADMIN = 1;
const ADMIN = 2;
const CLIENT = 3;

const SUPER_ADMIN_ROLE = { "id": 1, "name" : "super_admin" };
const ADMIN_ROLE = { "id": 2, "name" : "admin"}
const CLIENT_ROLE = { "id": 3, "name" : "client"}

var offset=0;


/*
* User View By ID
*/
var userID;
var viewUserInfoModal = [];

/** Base Modal **/
var viewUserProfileModal = $("#viewUserProfileModal");
var formUserProfile = $("form.userProfile");
var viewUserProfileButton = $(".viewUserProfileButton");
var updateProfileButton = $("#updateUserInfoProfileButton");

var editUserPasswordModal = $("#editUserPasswordModal");
var editUserPasswordButton = $(".editUserPasswordButton");
var updateUserPasswordButton = $("#updateUserPasswordButton");

var deleteUserRowButton = $("#deleteUserRowButton");




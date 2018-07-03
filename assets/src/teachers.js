//javascript file for teachers using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('teachersView', []);

app.controller ('teachersCtrl', function($scope, $http) {

    this.teacher = {user:user, id:'', employment_id:'', name:'', gender:'', email:'', phone_number:'', marital_status:'', home_address:'', qualification:'', date_employed:'', uonline:'', subjects:'', status:''};
    this.update = {col_name:'', col_value:''};

    $scope.teacher_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"teachers", "data":this.teacher};
            save_teacher($scope, $http, pb);
        } else {
            var data = Object.assign(this.teacher, this.update);
            var pu = {"method":"update", "table":"teachers", "data":data};
            update_teacher($scope, $http, pu);
        }
    };

    $scope.teacher_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_teacher_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.teacher_delete = function(coln, colv){
        delete_teacher($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"teachers_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"teachers"}
    }).then((result) =>{
        $scope.teachers = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_teacher($scope, $http, pb){
    $http({
        url: base_api_url+"teachers_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function show_selected($scope, $http, column, value){
    $http({
        url: base_api_url+"teachers_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"teachers", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.teacher = result.data.teacher;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_teacher($scope, $http, pb){
    $http({
        url: base_api_url+"teachers_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_teacher($scope, $http, column, value){
    $http({
        url: base_api_url+"teachers_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"teachers", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}


//javascript file for students using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('studentsView', []);

app.controller ('studentsCtrl', function($scope, $http) {

    this.student = {user:user, id:'', student_id:'', surname:'', first_name:'', middle_name:'', date_of_birth:'', place_of_birth:'', parent_id:'', state_of_origin:'', local_govt_area:'', town:'', gender:'', blood_group:'', genotype:'', home_address:'', sport_house:'', class_on_admission:'', current_class:'', passport_photograph:'', email:'', phone:''};
    this.update = {col_name:'', col_value:''};

    $scope.student_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"students", "data":this.student};
            save_student($scope, $http, pb);
        } else {
            var data = Object.assign(this.student, this.update);
            var pu = {"method":"update", "table":"students", "data":data};
            update_student($scope, $http, pu);
        }
    };

    $scope.student_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_student_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.student_delete = function(coln, colv){
        delete_student($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"students_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"students"}
    }).then((result) =>{
        $scope.students = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_student($scope, $http, pb){
    $http({
        url: base_api_url+"students_http_api.php",
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
        url: base_api_url+"students_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"students", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.student = result.data.student;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_student($scope, $http, pb){
    $http({
        url: base_api_url+"students_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_student($scope, $http, column, value){
    $http({
        url: base_api_url+"students_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"students", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}


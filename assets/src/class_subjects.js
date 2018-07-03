//javascript file for class_subjects using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('class_subjectsView', []);

app.controller ('class_subjectsCtrl', function($scope, $http) {

    this.class_subject = {user:user, id:'', subject:'', class:'', added_by:'', date_added:'', status:''};
    this.update = {col_name:'', col_value:''};

    $scope.class_subject_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"class_subjects", "data":this.class_subject};
            save_class_subject($scope, $http, pb);
        } else {
            var data = Object.assign(this.class_subject, this.update);
            var pu = {"method":"update", "table":"class_subjects", "data":data};
            update_class_subject($scope, $http, pu);
        }
    };

    $scope.class_subject_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_class_subject_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.class_subject_delete = function(coln, colv){
        delete_class_subject($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"class_subjects_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"class_subjects"}
    }).then((result) =>{
        $scope.class_subjects = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_class_subject($scope, $http, pb){
    $http({
        url: base_api_url+"class_subjects_http_api.php",
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
        url: base_api_url+"class_subjects_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"class_subjects", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.class_subject = result.data.class_subject;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_class_subject($scope, $http, pb){
    $http({
        url: base_api_url+"class_subjects_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_class_subject($scope, $http, column, value){
    $http({
        url: base_api_url+"class_subjects_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"class_subjects", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}


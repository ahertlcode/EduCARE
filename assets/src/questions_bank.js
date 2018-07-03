//javascript file for questions_bank using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('questions_bankView', []);

app.controller ('questions_bankCtrl', function($scope, $http) {

    this.questions_bank = {user:user, id:'', question:'', optionA:'', optionB:'', optionC:'', optionD:'', optionE:'', master_chained:'', siblings:'', answer:'', subject:'', exam_type:'', question_Image:'', scorepoint:''};
    this.update = {col_name:'', col_value:''};

    $scope.questions_bank_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"questions_bank", "data":this.questions_bank};
            save_questions_bank($scope, $http, pb);
        } else {
            var data = Object.assign(this.questions_bank, this.update);
            var pu = {"method":"update", "table":"questions_bank", "data":data};
            update_questions_bank($scope, $http, pu);
        }
    };

    $scope.questions_bank_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_questions_bank_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.questions_bank_delete = function(coln, colv){
        delete_questions_bank($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"questions_bank_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"questions_bank"}
    }).then((result) =>{
        $scope.questions_bank = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_questions_bank($scope, $http, pb){
    $http({
        url: base_api_url+"questions_bank_http_api.php",
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
        url: base_api_url+"questions_bank_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"questions_bank", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.questions_bank = result.data.questions_bank;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_questions_bank($scope, $http, pb){
    $http({
        url: base_api_url+"questions_bank_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_questions_bank($scope, $http, column, value){
    $http({
        url: base_api_url+"questions_bank_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"questions_bank", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}


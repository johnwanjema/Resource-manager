"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_admin_dashboard_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/dashboard.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/dashboard.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      pdfs: 0,
      snippets: 0,
      links: 0
    };
  },
  methods: {
    getDashboardData: function getDashboardData() {
      var _this = this;

      axios.get("/api/dashboardstats").then(function (_ref) {
        var data = _ref.data;
        // console.log(data);
        _this.pdfs = data.data.pdfs;
        _this.snippets = data.data.snippets;
        _this.links = data.data.links;
      })["catch"](function (e) {
        console.log(error);
      });
    }
  },
  created: function created() {
    this.getDashboardData();
  }
});

/***/ }),

/***/ "./resources/js/components/admin/dashboard.vue":
/*!*****************************************************!*\
  !*** ./resources/js/components/admin/dashboard.vue ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _dashboard_vue_vue_type_template_id_3a73534e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./dashboard.vue?vue&type=template&id=3a73534e& */ "./resources/js/components/admin/dashboard.vue?vue&type=template&id=3a73534e&");
/* harmony import */ var _dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./dashboard.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/dashboard.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _dashboard_vue_vue_type_template_id_3a73534e___WEBPACK_IMPORTED_MODULE_0__.render,
  _dashboard_vue_vue_type_template_id_3a73534e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/dashboard.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/dashboard.vue?vue&type=script&lang=js&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/admin/dashboard.vue?vue&type=script&lang=js& ***!
  \******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./dashboard.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/dashboard.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/dashboard.vue?vue&type=template&id=3a73534e&":
/*!************************************************************************************!*\
  !*** ./resources/js/components/admin/dashboard.vue?vue&type=template&id=3a73534e& ***!
  \************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_dashboard_vue_vue_type_template_id_3a73534e___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_dashboard_vue_vue_type_template_id_3a73534e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_dashboard_vue_vue_type_template_id_3a73534e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./dashboard.vue?vue&type=template&id=3a73534e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/dashboard.vue?vue&type=template&id=3a73534e&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/dashboard.vue?vue&type=template&id=3a73534e&":
/*!***************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/dashboard.vue?vue&type=template&id=3a73534e& ***!
  \***************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "content", staticStyle: { "padding-top": "68px" } },
    [
      _c(
        "div",
        {
          staticClass: "row js-appear-enabled animated fadeIn",
          attrs: { "data-toggle": "appear" }
        },
        [
          _c(
            "div",
            { staticClass: "col-6 col-xl-4" },
            [
              _c(
                "router-link",
                {
                  staticClass:
                    "block block-rounded block-bordered block-link-shadow",
                  attrs: { to: "/admin/pdfs" }
                },
                [
                  _c(
                    "div",
                    {
                      staticClass: "block-content block-content-full clearfix"
                    },
                    [
                      _c(
                        "div",
                        { staticClass: "float-right mt-15 d-none d-sm-block" },
                        [
                          _c("i", {
                            staticClass: "fa fa-book fa-2x text-primary-light"
                          })
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass:
                            "font-size-h3 font-w600 text-primary js-count-to-enabled",
                          attrs: {
                            "data-toggle": "countTo",
                            "data-speed": "1000",
                            "data-to": "1500"
                          }
                        },
                        [
                          _vm._v(
                            "\n                        " +
                              _vm._s(_vm.pdfs) +
                              "\n                    "
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass:
                            "font-size-sm font-w600 text-uppercase text-muted"
                        },
                        [
                          _vm._v(
                            "\n                        PDFS\n                    "
                          )
                        ]
                      )
                    ]
                  )
                ]
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "col-6 col-xl-4" },
            [
              _c(
                "router-link",
                {
                  staticClass:
                    "block block-rounded block-bordered block-link-shadow",
                  attrs: { to: "/admin/snippets" }
                },
                [
                  _c(
                    "div",
                    {
                      staticClass: "block-content block-content-full clearfix"
                    },
                    [
                      _c(
                        "div",
                        { staticClass: "float-right mt-15 d-none d-sm-block" },
                        [
                          _c("i", {
                            staticClass: "fa fa-code fa-2x text-earth-light"
                          })
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "font-size-h3 font-w600 text-earth" },
                        [_vm._v(_vm._s(_vm.snippets))]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass:
                            "font-size-sm font-w600 text-uppercase text-muted"
                        },
                        [
                          _vm._v(
                            "\n                        HTML snippet\n                    "
                          )
                        ]
                      )
                    ]
                  )
                ]
              )
            ],
            1
          ),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "col-6 col-xl-4" },
            [
              _c(
                "router-link",
                {
                  staticClass:
                    "block block-rounded block-bordered block-link-shadow",
                  attrs: { to: "/admin/links" }
                },
                [
                  _c(
                    "div",
                    {
                      staticClass: "block-content block-content-full clearfix"
                    },
                    [
                      _c(
                        "div",
                        { staticClass: "float-right mt-15 d-none d-sm-block" },
                        [
                          _c("i", {
                            staticClass: "fa fa-link fa-2x text-elegance-light"
                          })
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass:
                            "font-size-h3 font-w600 text-elegance js-count-to-enabled",
                          attrs: {
                            "data-toggle": "countTo",
                            "data-speed": "1000",
                            "data-to": "15"
                          }
                        },
                        [
                          _vm._v(
                            "\n                        15\n                    "
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass:
                            "font-size-sm font-w600 text-uppercase text-muted"
                        },
                        [
                          _vm._v(
                            "\n                        Links\n                    "
                          )
                        ]
                      )
                    ]
                  )
                ]
              )
            ],
            1
          )
        ]
      )
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);
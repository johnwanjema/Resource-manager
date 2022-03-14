"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_admin_pdf_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/pdf.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/pdf.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************************************/
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
      currentPage: 1,
      perPage: 5,
      fields: ['#', 'image', {
        key: 'title'
      }, {
        key: 'description'
      }, 'created_at', {
        key: 'actions',
        label: 'Actions'
      }],
      pdfs: [],
      filter: null,
      filterOn: [],
      form: new Form({
        id: '',
        title: '',
        description: '',
        pdf: '',
        image: ''
      }),
      editMode: false,
      pdf: {}
    };
  },
  computed: {
    rows: function rows() {
      return this.pdfs.length;
    }
  },
  methods: {
    updatePDf: function updatePDf() {
      var _this = this;

      var data = new FormData();
      data.append('title', this.form.title);
      data.append('description', this.form.description);
      data.append('pdf', this.form.pdf);
      axios.post("/api/updatepdf/" + this.pdf.id, data, {
        headers: {
          'accept': 'application/json',
          'Accept-Language': 'en-US,en;q=0.8',
          'Content-Type': 'multipart/form-data'
        }
      }).then(function (_ref) {
        var data = _ref.data;

        if (data.success) {
          $('#modal-large').modal('hide');

          _this.form.reset();

          document.getElementById("file-input").value = "";
          toast.fire({
            icon: "success",
            title: "PDF updated successfully"
          });

          _this.getPdfs();
        }
      });
    },
    selectPdf: function selectPdf(event) {
      this.form.pdf = event.target.files[0];
    },
    openModal: function openModal() {
      this.form.reset();
      this.editMode = false;
      $('#modal-large').modal('show');
    },
    openEditModal: function openEditModal(pdf) {
      this.editMode = true;
      this.pdf = pdf;
      $('#modal-large').modal('show');
      this.form.fill(pdf); // document.getElementById("file-input").value = pdf.storageLink;
    },
    onFiltered: function onFiltered(filteredItems) {
      this.totalRows = filteredItems.length;
      this.currentPage = 1;
    },
    getPdfs: function getPdfs() {
      var _this2 = this;

      axios.get("/api/pdfs").then(function (_ref2) {
        var data = _ref2.data;
        // console.log(data);
        _this2.pdfs = data.data;
        _this2.totalRows = _this2.pdfs.length;
      })["catch"](function (e) {
        console.log(error);
      });
    },
    addpdf: function addpdf() {
      var _this3 = this;

      var data = new FormData();
      data.append('title', this.form.title);
      data.append('description', this.form.description);
      data.append('pdf', this.form.pdf);
      data.append('image', this.form.image);
      axios.post("/api/pdfs", data, {
        headers: {
          'accept': 'application/json',
          'Accept-Language': 'en-US,en;q=0.8',
          'Content-Type': 'multipart/form-data'
        }
      }).then(function (_ref3) {
        var data = _ref3.data;

        if (data.success) {
          $('#modal-large').modal('hide');

          _this3.form.reset();

          document.getElementById("file-input").value = "";
          toast.fire({
            icon: "success",
            title: "PDF added successfully"
          });

          _this3.getPdfs();
        }
      });
    },
    deletePDF: function deletePDF(id) {
      var _this4 = this;

      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then(function (result) {
        // send request
        if (result.value) {
          _this4.form["delete"]("/api/pdfs/" + id).then(function () {
            Swal.fire("Deleted!", "PDF has been deleted.", "success");

            _this4.getPdfs();
          })["catch"](function () {
            Swal.fire("Failed to delete", "Failed", 'error');
          });
        }
      });
    },
    selectImage: function selectImage(event) {
      this.form.image = event.target.files[0];
    }
  },
  created: function created() {
    this.getPdfs();
  }
});

/***/ }),

/***/ "./resources/js/components/admin/pdf.vue":
/*!***********************************************!*\
  !*** ./resources/js/components/admin/pdf.vue ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _pdf_vue_vue_type_template_id_d8f03912___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./pdf.vue?vue&type=template&id=d8f03912& */ "./resources/js/components/admin/pdf.vue?vue&type=template&id=d8f03912&");
/* harmony import */ var _pdf_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./pdf.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/pdf.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _pdf_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _pdf_vue_vue_type_template_id_d8f03912___WEBPACK_IMPORTED_MODULE_0__.render,
  _pdf_vue_vue_type_template_id_d8f03912___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/pdf.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/pdf.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./resources/js/components/admin/pdf.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_pdf_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./pdf.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/pdf.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_pdf_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/pdf.vue?vue&type=template&id=d8f03912&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/admin/pdf.vue?vue&type=template&id=d8f03912& ***!
  \******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pdf_vue_vue_type_template_id_d8f03912___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pdf_vue_vue_type_template_id_d8f03912___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pdf_vue_vue_type_template_id_d8f03912___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./pdf.vue?vue&type=template&id=d8f03912& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/pdf.vue?vue&type=template&id=d8f03912&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/pdf.vue?vue&type=template&id=d8f03912&":
/*!*********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/pdf.vue?vue&type=template&id=d8f03912& ***!
  \*********************************************************************************************************************************************************************************************************************/
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
  return _c("section", [
    _c("div", { staticClass: "content" }, [
      _c("h2", { staticClass: "content-heading" }, [_vm._v("PDFs")]),
      _vm._v(" "),
      _c("div", { staticClass: "block" }, [
        _c("div", { staticClass: "block-header block-header-default" }, [
          _vm._m(0),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "btn btn-success",
              on: {
                click: function($event) {
                  return _vm.openModal()
                }
              }
            },
            [_vm._v("\n                        Add PDF\n                    ")]
          )
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "block-content block-content-full" }, [
          _c(
            "div",
            {
              staticClass: "dataTables_wrapper dt-bootstrap4 no-footer",
              attrs: { id: "DataTables_Table_1_wrapper" }
            },
            [
              _c("div", { staticClass: "row" }, [
                _c("div", { staticClass: "col-sm-12 col-md-6" }, [
                  _c(
                    "div",
                    {
                      staticClass: "dataTables_length",
                      attrs: { id: "DataTables_Table_1_length" }
                    },
                    [
                      _c("label", [
                        _vm._v(
                          "\n                                        Show\n                                        "
                        ),
                        _c(
                          "select",
                          {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.perPage,
                                expression: "perPage"
                              }
                            ],
                            staticClass:
                              "custom-select custom-select-sm form-control form-control-sm",
                            attrs: {
                              name: "DataTables_Table_1_length",
                              "aria-controls": "DataTables_Table_1"
                            },
                            on: {
                              change: function($event) {
                                var $$selectedVal = Array.prototype.filter
                                  .call($event.target.options, function(o) {
                                    return o.selected
                                  })
                                  .map(function(o) {
                                    var val = "_value" in o ? o._value : o.value
                                    return val
                                  })
                                _vm.perPage = $event.target.multiple
                                  ? $$selectedVal
                                  : $$selectedVal[0]
                              }
                            }
                          },
                          [
                            _c("option", { attrs: { value: "5" } }, [
                              _vm._v("5")
                            ]),
                            _vm._v(" "),
                            _c("option", { attrs: { value: "8" } }, [
                              _vm._v("8")
                            ]),
                            _vm._v(" "),
                            _c("option", { attrs: { value: "15" } }, [
                              _vm._v("15")
                            ]),
                            _vm._v(" "),
                            _c("option", { attrs: { value: "20" } }, [
                              _vm._v("20")
                            ])
                          ]
                        ),
                        _vm._v(
                          "\n                                        entries\n                                    "
                        )
                      ])
                    ]
                  )
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-sm-12 col-md-6" }, [
                  _c(
                    "div",
                    {
                      staticClass: "dataTables_filter",
                      attrs: { id: "DataTables_Table_1_filter" }
                    },
                    [
                      _c("label", [
                        _vm._v("Search:"),
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.filter,
                              expression: "filter"
                            }
                          ],
                          staticClass: "form-control form-control-sm",
                          attrs: {
                            type: "search",
                            placeholder: "",
                            "aria-controls": "DataTables_Table_1"
                          },
                          domProps: { value: _vm.filter },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.filter = $event.target.value
                            }
                          }
                        })
                      ])
                    ]
                  )
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "row" }, [
                _c(
                  "div",
                  { staticClass: "col-sm-12" },
                  [
                    _c("b-table", {
                      attrs: {
                        responsive: "",
                        striped: "",
                        hover: "",
                        "show-empty": "",
                        items: _vm.pdfs,
                        fields: _vm.fields,
                        "per-page": _vm.perPage,
                        "current-page": _vm.currentPage,
                        filter: _vm.filter,
                        filterIncludedFields: _vm.filterOn
                      },
                      on: { filtered: _vm.onFiltered },
                      scopedSlots: _vm._u([
                        {
                          key: "cell(#)",
                          fn: function(row) {
                            return [_c("p", [_vm._v(_vm._s(row.index + 1))])]
                          }
                        },
                        {
                          key: "cell(created_at)",
                          fn: function(row) {
                            return [
                              _c("p", [
                                _vm._v(
                                  _vm._s(
                                    _vm._f("filterDateOnly")(
                                      row.item.created_at
                                    )
                                  )
                                )
                              ])
                            ]
                          }
                        },
                        {
                          key: "cell(image)",
                          fn: function(row) {
                            return [
                              _c("img", {
                                staticClass: "img-avatar",
                                attrs: {
                                  src: "/pdfPictures/" + row.item.imageUrl,
                                  alt: ""
                                }
                              })
                            ]
                          }
                        },
                        {
                          key: "cell(actions)",
                          fn: function(row) {
                            return [
                              _c(
                                "a",
                                {
                                  staticClass: "btn btn-primary btn-sm",
                                  attrs: {
                                    href: "/PDF/" + row.item.storageLink,
                                    target: "_blank"
                                  }
                                },
                                [
                                  _vm._v(
                                    "\n                                        View\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "b-button",
                                {
                                  staticClass: "btn btn-sm",
                                  attrs: { variant: "warning" },
                                  on: {
                                    click: function($event) {
                                      return _vm.openEditModal(row.item)
                                    }
                                  }
                                },
                                [
                                  _vm._v(
                                    "\n                                        Edit\n                                    "
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "b-button",
                                {
                                  staticClass: "btn btn-sm",
                                  attrs: { variant: "danger" },
                                  on: {
                                    click: function($event) {
                                      return _vm.deletePDF(row.item.id)
                                    }
                                  }
                                },
                                [
                                  _vm._v(
                                    "\n                                        Delete\n                                    "
                                  )
                                ]
                              )
                            ]
                          }
                        }
                      ])
                    })
                  ],
                  1
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "row" }, [
                _c("div", { staticClass: "col-sm-12 col-md-5" }),
                _vm._v(" "),
                _c("div", { staticClass: "col-sm-12 col-md-7" }, [
                  _c(
                    "div",
                    {
                      staticClass: "dataTables_paginate paging_simple_numbers",
                      attrs: { id: "DataTables_Table_1_paginate" }
                    },
                    [
                      _c("b-pagination", {
                        attrs: {
                          "total-rows": _vm.rows,
                          "per-page": _vm.perPage,
                          "aria-controls": "my-table"
                        },
                        model: {
                          value: _vm.currentPage,
                          callback: function($$v) {
                            _vm.currentPage = $$v
                          },
                          expression: "currentPage"
                        }
                      })
                    ],
                    1
                  )
                ])
              ])
            ]
          )
        ])
      ])
    ]),
    _vm._v(" "),
    _c(
      "div",
      {
        staticClass: "modal",
        attrs: {
          id: "modal-large",
          tabindex: "-1",
          role: "dialog",
          "aria-labelledby": "modal-large",
          "aria-hidden": "true"
        }
      },
      [
        _c(
          "div",
          { staticClass: "modal-dialog modal-lg", attrs: { role: "document" } },
          [
            _c("div", { staticClass: "modal-content" }, [
              _c(
                "form",
                {
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      _vm.editMode ? _vm.updatePDf() : _vm.addpdf()
                    }
                  }
                },
                [
                  _c(
                    "div",
                    {
                      staticClass: "block block-themed block-transparent mb-0"
                    },
                    [
                      _c(
                        "div",
                        { staticClass: "block-header bg-primary-dark" },
                        [
                          _vm.editMode
                            ? _c("h3", { staticClass: "block-title" }, [
                                _vm._v("Edit PDF")
                              ])
                            : _c("h3", { staticClass: "block-title" }, [
                                _vm._v("Add PDF")
                              ]),
                          _vm._v(" "),
                          _vm._m(1)
                        ]
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "block-content" }, [
                        _c("div", { staticClass: "form-group" }, [
                          _c("label", { attrs: { for: "email" } }, [
                            _vm._v("Title")
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.form.title,
                                expression: "form.title"
                              }
                            ],
                            staticClass: "form-control",
                            attrs: {
                              required: "",
                              type: "text",
                              id: "email",
                              name: "email",
                              placeholder: "Enter title.."
                            },
                            domProps: { value: _vm.form.title },
                            on: {
                              input: function($event) {
                                if ($event.target.composing) {
                                  return
                                }
                                _vm.$set(_vm.form, "title", $event.target.value)
                              }
                            }
                          })
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group row" }, [
                          _c(
                            "label",
                            {
                              staticClass: "col-12",
                              attrs: { for: "textarea-input" }
                            },
                            [_vm._v("Description")]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-12" }, [
                            _c("textarea", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.form.description,
                                  expression: "form.description"
                                }
                              ],
                              staticClass: "form-control",
                              attrs: {
                                id: "textarea-input",
                                name: "textarea-input",
                                rows: "4",
                                placeholder: "Description ..",
                                spellcheck: "false"
                              },
                              domProps: { value: _vm.form.description },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.form,
                                    "description",
                                    $event.target.value
                                  )
                                }
                              }
                            })
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group row" }, [
                          _c(
                            "label",
                            {
                              staticClass: "col-12",
                              attrs: { for: "file-input" }
                            },
                            [_vm._v("Image")]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-12" }, [
                            _c("input", {
                              attrs: {
                                required: "",
                                type: "file",
                                id: "image-input",
                                name: "file-input"
                              },
                              on: { change: _vm.selectImage }
                            })
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group row" }, [
                          _c(
                            "label",
                            {
                              staticClass: "col-12",
                              attrs: { for: "file-input" }
                            },
                            [_vm._v("File Upload")]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-12" }, [
                            _c("input", {
                              attrs: {
                                required: "",
                                type: "file",
                                id: "file-input",
                                name: "file-input"
                              },
                              on: { change: _vm.selectPdf }
                            })
                          ])
                        ])
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c("div", { staticClass: "modal-footer" }, [
                    _c(
                      "button",
                      {
                        staticClass: "btn btn-alt-danger",
                        attrs: { type: "button", "data-dismiss": "modal" }
                      },
                      [_vm._v("Close")]
                    ),
                    _vm._v(" "),
                    _vm.editMode
                      ? _c(
                          "button",
                          {
                            staticClass: "btn btn-alt-success",
                            attrs: { type: "submit" }
                          },
                          [
                            _vm._v(
                              "\n                            Update PDF\n                        "
                            )
                          ]
                        )
                      : _c(
                          "button",
                          {
                            staticClass: "btn btn-alt-success",
                            attrs: { type: "submit" }
                          },
                          [
                            _vm._v(
                              "\n                            Add PDF\n                        "
                            )
                          ]
                        )
                  ])
                ]
              )
            ])
          ]
        )
      ]
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h3", { staticClass: "block-title" }, [_c("small")])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "block-options" }, [
      _c(
        "button",
        {
          staticClass: "btn-block-option",
          attrs: {
            type: "button",
            "data-dismiss": "modal",
            "aria-label": "Close"
          }
        },
        [_c("i", { staticClass: "si si-close" })]
      )
    ])
  }
]
render._withStripped = true



/***/ })

}]);
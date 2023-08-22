@extends('backend.layout.content')
@section('title', 'AI Chat')
@section('vendor-style')
  <link rel="stylesheet" href="{{asset('backend/libs/bootstrap-maxlength/bootstrap-maxlength.css')}}" />
@endsection

@section('page-style')
  <link rel="stylesheet" href="{{asset('backend/css/pages/chat.css')}}" />
@endsection

@section('content')
  <div class="app-chat w-100 overflow-hidden">
    <div class="row g-0">
      <div class="col app-chat-contacts app-sidebar flex-grow-0 zindex-4" id="app-chat-contacts">
        <div class="sidebar-header">

          <div class="align-items-center chats-new justify-content-center mb-3">
            <a id="start_chat" class="btn bg-primary text-white w-100 px-3" href="javascript:void(0);"
               onclick="newChat()">
              {{__('New Conversation')}}
            </a>
          </div>

          <div class="d-flex justify-content-center">
            <form action="#" class="chats-search-form w-100">
              <div class="d-flex flex-grow-1 align-items-center bg-label-secondary rounded-2 p-0">
                <input type="search"
                       class="form-control bg-label-secondary border-0 chat-search-input py-2"
                       id="chat_search_word"
                       data-category-id="{{$chat->chat_category_id ?? ''}}"
                       placeholder="{{__('Search')}}..." aria-describedby="{{__('Search')}}..."
                       @isset($search_word)value="{{ $search_word }}"@endisset>
                <span class="px-2">
                    {!! get_svg_icon('magnifier', 'fs-5', '', '', ['height' => '22' , 'width' => '22'])!!}
                </span>
              </div>
            </form>
          </div>

          <span
            class="rounded-3 bg-white text-primary shadow p-2 mt-2 ms-2 d-lg-none d-block position-absolute translate-middle start-100 top-0 cursor-pointer"
            data-overlay
            data-bs-toggle="sidebar" data-target="#app-chat-contacts">
              {!! get_svg_icon('cross-square', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
            </span>
        </div>
        <div class="sidebar-body">
          @include('backend.user.chat._partials.chats')
        </div>
      </div>

      <div class="col app-chat-history overflow-hidden mw-100 mh-100">
        <div class="chat-history-wrapper position-relative overflow-hidden mw-100 mh-100">
          <div class="position-absolute top-0 w-100 bg-white mb-n6 zindex-1">
            <div class="m-0">
              <div class="chat-history-header">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="d-flex overflow-hidden align-items-center">
                <span class="rounded-3 bg-label-secondary p-2 me-3 cursor-pointer d-lg-none d-block"
                      data-bs-toggle="sidebar"
                      data-overlay
                      data-target="#app-chat-contacts">
        {!! get_svg_icon('menu-dots-square', 'fs-4', '', '', ['height' => '22' , 'width' => '22'])!!}
                </span>

                    <div class="d-flex align-items-center">
                      <a href="{{route('dashboard.user.index')}}" class="">
                        <img src="{{asset(getSetting('logo'))}}" alt="{{getSetting('site_name')}}"
                             class="d-none d-md-block h-px-30">
                      </a>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <a class="btn bg-info text-white border border-info d-flex align-items-center me-3 px-2 px-md-3"
                       data-bs-toggle="modal" data-bs-target="#persomodal">
                      {!! get_svg_icon('black-hole', 'fs-4', '', '', ['height' => '20' , 'width' => '20'])!!}
                      <span class="d-none d-md-block ms-1">{{__('Personage')}}</span>
                    </a>
                    {{--data-bs-toggle="modal" data-bs-target="#promptmodal"--}}
                    <a
                      class="btn bg-info text-white border border-info d-flex align-items-center px-2 px-md-3 disabled">
                      {!! get_svg_icon('command-2', 'fs-4', '', '', ['height' => '20' , 'width' => '20'])!!}
                      <span class="d-none d-md-block ms-1">{{__('Prompt Library')}}</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="chat-history-body position-relative">
            @isset($messages)
              @include('backend.user.chat._partials.messages')
            @else
              @include('backend.user.chat._partials.message_default')
            @endisset
          </div>

          <div class="position-absolute bottom-0 w-100 bg-white shadow-lg">
            <div class="row">
              <div class="col-xl-8 mx-auto">
                <div class="m-2 mb-3 m-lg-2">
                  <div class="chat-history-footer w-100 bg-label-secondary">
                    <form class="form-send-message d-flex justify-content-between align-items-center" id="chat_form">
                      <input class="form-control message-input bg-label-secondary border-0 me-3 shadow-none"
                             name="prompt" id="prompt"
                             placeholder="{{__('Your Message')}}">
                      <div class="message-actions d-flex align-items-center">
                        <button class="btn d-flex text-secondary p-0 m-0" disabled>
                          {!! get_svg_icon('mic', 'fs-4', '', '', ['height' => '32' , 'width' => '32'])!!}
                        </button>
                        <button type="submit" class="btn btn-primary d-flex p-1" id="send_btn">
                          {!! get_svg_icon('send', 'fs-4', '', '', ['height' => '32' , 'width' => '32'])!!}
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="app-overlay"></div>
      </div>
    </div>
  </div>

  @include('backend.user.chat._partials.prompts')
  @include('backend.user.chat._partials.perso')
@endsection

@section('page-script')
  <script>
    "use strict";

    let searchInput = document.querySelector("#chat_search_word");

    if (searchInput) {
      searchInput?.addEventListener("keypress", e => {
        if (e.keyCode == 13) {
          e.preventDefault();
          return submitForm();
        }
      });
      searchInput.addEventListener("keyup", e => {
        let val = e.currentTarget.value.toLowerCase(),
          chatCount = 0,
          listCount = 0,
          listBund = document.querySelector("#chat-list li.chat-not-found"),
          list = [].slice.call(
            document.querySelectorAll("#chat-list li")
          );
        search(list, chatCount, val, listBund);
      });
    }

    // Search chat and contacts function
    function search(list, count, val, bund) {
      list.forEach(list => {
        let listText = list.textContent.toLowerCase();
        if (val) {
          if (-1 < listText.indexOf(val)) {
            list.classList.add("d-flex");
            list.classList.remove("d-none");
            count++;
          } else {
            list.classList.add("d-none");
          }
        } else {
          list.classList.add("d-flex");
          list.classList.remove("d-none");
          count++;
        }
      });
      if (count == 0) {
        bund.classList.remove("d-none");
      } else {
        bund.classList.add("d-none");
      }
      scrollbar(".app-chat-contacts .sidebar-body", true);
    }

    function scrollToBottom() {
      const chat = document.querySelector(".chat-history-body");
      chat.scrollTop = chat.scrollHeight;
    }

    function scrollbar(el, first = null) {
      if (first) {
        const to = document.querySelector(el);
        new PerfectScrollbar(to, {
          wheelPropagation: false,
          suppressScrollX: true
        });
      }
    }

    scrollbar(".sidebar-body", true);
    scrollbar(".chat-history-body", true);

    const chatLists = [].slice.call(
      document.querySelectorAll(".chat-contact-list-item > a")
    );

    chatLists.forEach(chatList => {
      chatList.addEventListener("click", e => {
        chatLists.forEach(chatList => {
          chatList.parentElement.classList.remove("active");
        });
        e.currentTarget.parentElement.classList.add("active");
      });
    });

    function getChats($this, chat_category_id) {
      let hasActiveClass = $($this).hasClass("active");
      if (hasActiveClass) {
        setTimeout(() => {
          $("#persomodal").modal("hide");
        }, 300);
        return;
      }
      $($this).closest("#persomodal").find("a.active").removeClass("active");
      $($this).addClass("active");
      $(".chat-history-body").addClass("invisible");

      let data = {
        chat_category_id: chat_category_id
      };

      $.ajax({
        headers: {
          "X-CSRF-TOKEN": '{{ csrf_token() }}'
        },
        method: "POST",
        url: '{{ route('dashboard.user.ai.chat.chats') }}',
        data: data,
        beforeSend: function() {
        },
        complete: function() {
          setTimeout(() => {
            $("#persomodal").modal("hide");
            scrollbar(".sidebar-body");
            scrollbar(".chat-history-body");
            scrollToBottom();
          }, 300);
        },
        success: function(data) {
          if (data.status == 200) {
            $(".sidebar-body").empty();
            $(".chat-history-body").empty();
            $(".sidebar-body").html(data.chats);
            $(".chat-history-body").html(data.messages);
            $(".chat-history-body").removeClass("invisible");

            const search = document.getElementById("chat_search_word");
            search.setAttribute("data-category-id", chat_category_id);

            msg_ready();
          } else {
            if (data.message) {
              toastr["error"](data.message);
            } else {
              toastr["error"]('{{ __('Something went wrong') }}');
            }
          }
        },
        error: function(data) {
          if (data.status == 400 && data.message) {
            toastr["error"](data.message);
          } else {
            toastr["error"]('{{ __('Something went wrong') }}');
          }
        }
      });
    }

    function newChat() {
      let perso = $("#persomodal a.active").data("category_id");

      let data = {
        category_id: perso
      };

      $(".chat-history-body").addClass("invisible");
      $.ajax({
        headers: {
          "X-CSRF-TOKEN": '{{ csrf_token() }}'
        },
        method: "POST",
        url: '{{ route('dashboard.user.ai.chat.store') }}',
        data: data,
        beforeSend: function() {
          $("#start_chat").prop("disabled", true);
        },
        complete: function() {
          $("#start_chat").prop("disabled", false);
          setTimeout(() => {
            scrollbar(".sidebar-body");
            scrollbar(".chat-history-body");
            scrollToBottom();
          }, 300);
        },
        success: function(data) {
          if (data.status == 200) {
            $(".sidebar-body").empty();
            $(".chat-history-body").empty();
            $(".sidebar-body").html(data.chats);
            $(".chat-history-body").html(data.messages);
            $(".chat-history-body").removeClass("invisible");

            msg_ready();
          } else {
            if (data.message) {
              toastr["error"](data.message);
            } else {
              toastr["error"]('{{ __('Something went wrong') }}');
            }
          }
        },
        error: function(data) {
          if (data.status == 400 && data.message) {
            toastr["error"](data.message);
          } else {
            toastr["error"]('{{ __('Something went wrong') }}');
          }
        }
      });
    }

    @isset($chats)
    newChat()
    @endisset

    function getMessages($this, chatId) {
      let hasActiveClass = $($this).hasClass("active");
      if (hasActiveClass) {
        return;
      }

      $($this).closest(".chat-contact-list").find("li.active").removeClass("active");
      $($this).parent().addClass("active");
      $(".chat-history-body").addClass("invisible");

      let data = {
        chatId: chatId
      };

      $.ajax({
        headers: {
          "X-CSRF-TOKEN": '{{ csrf_token() }}'
        },
        method: "POST",
        url: '{{ route('dashboard.user.ai.chat.messages') }}',
        data: data,
        beforeSend: function() {
        },
        complete: function() {
          setTimeout(() => {
            scrollbar("sidebar-body");
            scrollbar(".chat-history-body");
            scrollToBottom();
          }, 300);
        },
        success: function(data) {
          if (data.status == 200) {
            $(".chat-history-body").empty();
            $(".chat-history-body").html(data.messages);
            $(".chat-history-body").removeClass("invisible");

            msg_ready();
          } else {
            if (data.message) {
              toastr["error"](data.message);
            } else {
              toastr["error"]('{{ __('Something went wrong') }}');
            }
          }
        },
        error: function(data) {
          if (data.status == 400 && data.message) {
            toastr["error"](data.message);
          } else {
            toastr["error"]('{{ __('Something went wrong') }}');
          }
        }
      });
    }

    function deleteChat($this, chatId) {
      if (confirm(`{{__('Are you sure you want to remove ?')}}`)) {

        let el = $this.parentElement;
        let par = el.parentElement;
        par.remove();

        let data = new FormData();
        data.append("chat_id", chatId);

        $.ajax({
          type: "POST",
          url: `{{ route('dashboard.user.ai.chat.delete') }}`,
          data: data,
          contentType: false,
          processData: false,
          success: function(data) {
            toastr["success"]("sucess", '{{ __('Deleted with success') }}');
          },
          error: function(data) {
            let err = data.responseJSON.errors;
            if (err) {
              $.each(err, function(index, value) {
                toastr["error"](value);
              });
            } else {
              toastr["error"](data.responseJSON.message);
            }
          }
        });
        return false;
      }
    }

    function msg_ready() {
      $("#chat_form").on("submit", function(e) {
        e.preventDefault();
        e.stopPropagation();
        let form = $(this);
        let prompt = form.find("#prompt").val();

        if (!prompt || prompt === 0 || prompt.replace(/\s/g, "") === "") return;

        let userName = '{{ auth()->user()->name }}';
        let userAvatar = '{{ asset(auth()->user()->avatar) }}';

        let newMsg = `<div class="row m-0 chat-message justify-content-start chat-message-right">
                         <div class="col-11 col-md-7 mx-auto my-3">
                            <div class="d-flex overflow-hidden">
                              <div class="user-avatar flex-shrink-0 mt-2 me-3">
                                <div class="avatar avatar-sm">
                                  <img src="${userAvatar}" alt="Avatar" class="rounded-circle">
                                </div>
                              </div>
                              <div class="chat-message-wrapper flex-grow-1">
                                <div class="chat-message-text">${prompt}</div>
                              </div>
                            </div>
                         </div>
                       </div>`;

        scrollbar(".chat-history-body");
        scrollToBottom();

        let data = form.serialize();
        let chat_id = $("body").find(".chat-contact-list li.active a").data("id");
        let category_id = $("body").find("#persomodal a.active").data("category_id");

        data += `&chat_id=${chat_id}&category_id=${category_id}`;

        $.ajax({
          headers: {
            "X-CSRF-TOKEN": '{{ csrf_token() }}'
          },
          method: "POST",
          url: '{{ route('dashboard.user.ai.chat.message') }}',
          data: data,
          beforeSend: function() {
            $("#prompt").val("");
            $(".chat-history-body .chat-history").append(newMsg);
            $("#send_btn").prop("disabled", true);
            setTimeout(() => {
              scrollToBottom();
            }, 300);
          },
          complete: function() {
          },
          success: function(data) {
            const {
              firstMessage,
              chat_id,
              message_id
            } = data;
            let url = '{{ route('dashboard.user.ai.chat.message') }}',
              responseText = "";

            const eventSource = new EventSource(
              `${url}?chat_id=${chat_id}&message_id=${message_id}`, {
                withCredentials: true
              });

            const activeNode = $(".chat-history-body .chat-history");

            activeNode.append(firstMessage);

            let nodesDiv = document.getElementById("node_chatfirst");

            eventSource.onmessage = function(e) {
              if (e.data == "[DONE]") {
                $("#send_btn").prop("disabled", false);
                nodesDiv.removeAttribute("id");
                eventSource.close();
              } else {
                let txt = e.data;
                if (txt !== undefined && e.data != "[DONE]") {
                  responseText += txt.split("/**")[0];
                  const active = $("#node_chatfirst .chat-message-text");
                  active[0].innerHTML = responseText;
                }
              }
              scrollToBottom();
            };

            eventSource.onerror = function(e) {
              $("#send_btn").prop("disabled", false);
              toastr["error"]('{{ __('Please retry') }}');
              console.log(nodeDiv);
              nodesDiv.parentNode.removeChild(nodeDiv);
              eventSource.close();
            };
          }
        });
      });
    }

    msg_ready();

    function textAreaAdjust() {
      $(".message-input").on("keyup", function(e) {
          const el = e.target;
          el.style.height = "1px";
          el.style.height = (25 + el.scrollHeight) + "px";
        }
      );
    }

    textAreaAdjust();

  </script>

@endsection

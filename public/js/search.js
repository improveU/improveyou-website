$(function () {
    var typingTimer;
    var doneTypingInterval = 500; // ms
    var minQueryLength = 3;
    var maxResultsCourses = 10;
    var maxResultsProfiles = 5;

    $("#search-input").on("keyup", function () {
        clearTimeout(typingTimer);
        var query = $(this).val();
        if (query.length >= minQueryLength) {
            $("#search-loading-spinner").show();
            typingTimer = setTimeout(function () {
                search(query);
            }, doneTypingInterval);
        } else {
            $("#search-results").empty();
        }
    });

    function search(query) {
        $.ajax({
            url: "/search",
            method: "GET",
            data: { q: query },
            success: function (response) {
                var courses = response.courses;
                var profiles = response.users;
                var results = $("#search-results");
                results.empty();
    
                var coursesList = $("<ul></ul>");
                var profilesList = $("<ul></ul>");
    
                if (courses.length > 0) {
                    courses.forEach((course, index) => {
                        if (coursesList.children().length < maxResultsCourses) {
                            var highlightedTitle = course.title.replace(new RegExp(query, "gi"), function(match) {
                                return "<mark>" + match + "</mark>";
                            });
                            coursesList.append("<li><a href='/course/" + course.id + "'>" + highlightedTitle + "</a></li>");
                        }
                    });
                    results.append("<h3>Courses</h3>");
                    results.append(coursesList);
                }
    
                if (profiles.length > 0) {
                    profiles.forEach((profile, index) => {
                        if (profilesList.children().length < maxResultsProfiles) {
                            var highlightedUsername = profile.username.replace(new RegExp(query, "gi"), function(match) {
                                return "<mark>" + match + "</mark>";
                            });
                            profilesList.append("<li><a href='/profile/" + profile.id + "'>" + highlightedUsername + "</a></li>");
                        }
                    });
                    results.append("<h3>Profiles</h3>");
                    results.append(profilesList);
                }
    
                if (courses.length === 0 && profiles.length === 0) {
                    results.append("<li class='noResults'>No results found</li>");
                }
    
                $("#search-loading-spinner").hide();
            }
        });
    }
});


$(function() {
    // toggle search toggle menu
    $("#searchIndicator").click(function() {
      $("#searchToggleMenu").toggleClass("hidden");
      $("body").toggleClass("overflowHidden");
      if (!$("#searchToggleMenu").hasClass("hidden")) {
        $("#search-input").focus();
      }
    });
  
    // hide search toggle menu when clicked outside
    $(document).mouseup(function(e) {
      var searchForm = $("#search-form");
      if (!searchForm.is(e.target) && searchForm.has(e.target).length === 0) {
        $("#searchToggleMenu").addClass("hidden");
        $("body").removeClass("overflowHidden");
      }
    });
  });
  
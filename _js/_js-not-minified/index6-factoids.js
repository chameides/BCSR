            // Scene 5 - animate the module rows when Reputations and Outcomes is scrolled into view.
            var scene5 = new ScrollScene({triggerElement: '#reputations_outcomes'})
                .on('enter leave', function(e) {
                    scrollReputationRowsIntoView();
                    //console.log('scrollReputationRowsIntoView');
                }).addTo(controller);
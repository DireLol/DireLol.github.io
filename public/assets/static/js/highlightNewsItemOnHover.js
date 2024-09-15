    document.querySelectorAll('.news-item').forEach(item => {
        item.addEventListener('mouseenter', () => {
            const title = item.querySelector('.title');
            const moreDetails = item.querySelector('.more-details');

            title.style.color = '#a90061';
            moreDetails.style.color = '#fff';
            moreDetails.style.backgroundColor = '#88004c';
        });

        item.addEventListener('mouseleave', () => {
            const title = item.querySelector('.title');
            const moreDetails = item.querySelector('.more-details');

            title.style.color = 'black';
            moreDetails.style.color = '#a90061';
            moreDetails.style.backgroundColor = 'transparent';
        });
    });

import pokemon from 'pokemontcgsdk'

pokemon.configure({apiKey: 'c45c3585-37a9-4376-9dde-3b7bb16284c7'})

pokemon.card.where({ name: 'growlithe' })
    .then(cards => {
        cards.forEach(card => {
            console.log(card.imageUrl);
        });
    })
    .catch(error => {
        console.log('Error:', error.message);
    });
const quotes =[
    {
        quote: "Determine never to be idle...It is wonderful how much may be done if we are always doing.",
        author: "Thomas Jefferson",
    },
    {
        quote: "Never hold discussions with the monkey when the organ grinder is in the room.",
        author: "Sir Winston Churchill",
    },
    {
        quote: "Hide not your talents. They for use were made. What's a sundial in the shade.",
        author: "Benjamin Franklin",
    },
    {
        quote: "Did you ever walk into a room and forget why you walked in? I think that's how dogs spend their lives.",
        author: "Sue Murphy",
    },
    {
        quote: "Each of us visits this Earth involuntarily, and without an invitation. For me, it is enough to wonder at the secrets.",
        author: "Albert Einstein",
    },
    {
        quote: "If an injury has to be done to a man it should be so severe that his vengeance need not be feared.",
        author: "Niccolo Machiavelli",
    },
    {
        quote: "Character is that which reveals moral purpose, exposing the class of things a man chooses or avoids",
        author: "Aristotle",
    },
    {
        quote: "Each painting has its own way of evolving...When the painting is finished, the subject reaveals itself.",
        author: "William Baziotes",
    },
    {
        quote: "To avoid situations in which you might make mistakes may be the biggest mistake of all.",
        author: "Peter McWilliams",
    },
    {
        quote: "Courage is the ladder on which all the other virtues mount.",
        author: "Clare Booth Luce",
    },
]

const quote = document.querySelector("#quote span:first-child");
const author = document.querySelector("#quote span:last-child");

const todayQuote = quotes[Math.floor(Math.random()*quotes.length)];

quote.innerText = todayQuote.quote;
author.innerText = `- ${todayQuote.author} -`;
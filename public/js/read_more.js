document.addEventListener("DOMContentLoaded", function() {
    let myjokes = [
            {
                "category": "Programming",
                "type": "twopart",
                "setup": "Why are Assembly programmers always soaking wet?",
                "delivery": "They work below C-level.",
                "flags": {
                    "nsfw": false,
                    "religious": false,
                    "political": false,
                    "racist": false,
                    "sexist": false,
                    "explicit": false
                },
                "safe": true,
                "id": 264,
                "lang": "en"
            },
            {
                "category": "Programming",
                "type": "single",
                "joke": "A guy walks into a bar and asks for 1.4 root beers.\nThe bartender says \"I'll have to charge you extra, that's a root beer float\".\nThe guy says \"In that case, better make it a double.\"",
                "flags": {
                    "nsfw": false,
                    "religious": false,
                    "political": false,
                    "racist": false,
                    "sexist": false,
                    "explicit": false
                },
                "id": 2,
                "safe": true,
                "lang": "en"
            },
            {
                "category": "Programming",
                "type": "single",
                "joke": "I've got a really good UDP joke to tell you but I don’t know if you'll get it.",
                "flags": {
                    "nsfw": false,
                    "religious": false,
                    "political": false,
                    "racist": false,
                    "sexist": false,
                    "explicit": false
                },
                "id": 0,
                "safe": true,
                "lang": "en"
            },
            {
                "category": "Programming",
                "type": "single",
                "joke": "Java and C were telling jokes. It was C's turn, so he writes something on the wall, points to it and says \"Do you get the reference?\" But Java didn't.",
                "flags": {
                    "nsfw": false,
                    "religious": false,
                    "political": false,
                    "racist": false,
                    "sexist": false,
                    "explicit": false
                },
                "id": 4,
                "safe": true,
                "lang": "en"
            },
            {
                "category": "Programming",
                "type": "twopart",
                "setup": "How do you generate a random string?",
                "delivery": "Put a Windows user in front of Vim and tell them to exit.",
                "flags": {
                    "nsfw": false,
                    "religious": false,
                    "political": false,
                    "racist": false,
                    "sexist": false,
                    "explicit": false
                },
                "id": 127,
                "safe": true,
                "lang": "en"
            },
            {
                "category": "Programming",
                "type": "single",
                "joke": "Documentation is like sex:\nWhen it's good, it's very good.\nWhen it's bad, it's better than nothing...",
                "flags": {
                    "nsfw": true,
                    "religious": false,
                    "political": false,
                    "racist": false,
                    "sexist": false,
                    "explicit": false
                },
                "safe": false,
                "id": 305,
                "lang": "en"
            },
            {
                "category": "Programming",
                "type": "single",
                "joke": "Debugging is like being the detective in a crime movie where you're also the murderer at the same time.",
                "flags": {
                    "nsfw": false,
                    "religious": false,
                    "political": false,
                    "racist": false,
                    "sexist": false,
                    "explicit": false
                },
                "id": 42,
                "safe": true,
                "lang": "en"
            },
            {
                "category": "Programming",
                "type": "single",
                "joke": "Eight bytes walk into a bar.\nThe bartender asks, \"Can I get you anything?\"\n\"Yeah,\" reply the bytes.\n\"Make us a double.\"",
                "flags": {
                    "nsfw": false,
                    "religious": false,
                    "political": false,
                    "racist": false,
                    "sexist": false,
                    "explicit": false
                },
                "id": 34,
                "safe": true,
                "lang": "en"
            },
            {
                "category": "Programming",
                "type": "twopart",
                "setup": "Why does no one like SQLrillex?",
                "delivery": "He keeps dropping the database.",
                "flags": {
                    "nsfw": false,
                    "religious": false,
                    "political": false,
                    "racist": false,
                    "sexist": false,
                    "explicit": false
                },
                "id": 13,
                "safe": true,
                "lang": "en"
            },
            {
                "category": "Programming",
                "type": "twopart",
                "setup": "So what's a set of predefined steps the government might take to preserve the environment?",
                "delivery": "An Al-Gore-ithm.",
                "flags": {
                    "nsfw": false,
                    "religious": false,
                    "political": false,
                    "racist": false,
                    "sexist": false,
                    "explicit": false
                },
                "id": 52,
                "safe": true,
                "lang": "en"
            }
    ]

    let index = Math.floor(Math.random() * myjokes.length);
    console.log(index);

    document.getElementById("joke").innerHTML = myjokes[index].joke;
});
import { images } from "./images";

interface Post {
    title: string
    date: string
    content: string
    summary: string
    image: string
}

// - nth index the main headline post
// - 7 posts at max (is better to keep)
export const posts: Post[] = [
    {
        title: 'The Techfest - Avishkar',
        date: 'October 28, 2022',
        content: `Heya fams!\n
                    Avishkar, the most awaited techno-management fest of MNNIT Allahabad is right around the corner.
                    Every student must join our MS Teams Channel to stay updated.`,
        summary: `Heya fams!\n
                    Avishkar, the most awaited techno-management fest of MNNIT Allahabad is right around the corner.
                    Every student must join our MS Teams Channel to stay updated.`,
        image: images.avishkar
    },
    {
        title: 'Annual Athletic Meet',
        date: 'January 18, 2023',
        content: `Hola amigos,\n
                    Let's discover our inner sportsmanship this month, as we under the honour
                    of SAC are here to acquit you unpack all your ground essentials and unleash the serene calibre in you.`,
        summary: `Hola amigos,\n
                    Let's discover our inner sportsmanship this month, as we under the honour
                    of SAC are here to acquit you unpack all your ground essentials and unleash the serene calibre in you.`,
        image: images.aanm
    },
    {
        title: 'Culrav is almost here',
        date: 'April 4, 2023',
        content: `Say Konnichiwa to the brand new logo of Culrav '23.\n
                    The logo's vibrant colours and spectacular design perfectly encapsulate the spirit and essence of our forthcoming event.\n
                    Designed by: @mrrobot.psd`,
        summary: `Say Konnichiwa to the brand new logo of Culrav '23.\n
                    The logo's vibrant colours and spectacular design perfectly encapsulate the spirit and essence of our forthcoming event.\n
                    Designed by: @mrrobot.psd`,
        image: images.culrav
    },
    {
        title: 'Unveiling CodeSangam',
        date: 'October 28, 2023',
        content: `Where Innovation Meets the Universe!\n
                    Get ready to embark on a cosmic journey that will transport you through the ever-expanding realms of technology and innovation. Join us as CC Club proudly presents the ultimate coding odyssey: CodeSangam! 

                    🌐 Webster - For those who want to paint the web with their creativity.
                    📱 DroidRush - Dive into the exciting world of Android app development.
                    💡 Logical Rhythm - Uncover the magic of machine learning and AI.
                    🖥️ Softablitz - Craft desktop applications that shape the future.
                    👩‍💻 ContriHub - Contribute to open-source projects that impact the world.

                    Whether you're a coding novice or a seasoned pro, there's a challenge for everyone. Sharpen your skills, collaborate with the brightest minds, and stand a chance to win stellar prizes! 🪐

                    Website Link - https://sac.mnnit.ac.in/codesangam

                    🚀 Team Registrations are now OPEN! Assemble your tech-savvy crew and explore the galaxy of events under CodeSangam. Let your coding journey get a turbo boost!`,
        summary: `Where Innovation Meets the Universe!\n
                    Get ready to embark on a cosmic journey that will transport you through the ever-expanding realms of technology and innovation.\n
                    🌐 Webster\n📱 DroidRush\n💡 Logical Rhythm\n 🖥️ Softablitz\n 👩‍💻 ContriHub`,
        image: images.codesangam
    }
];

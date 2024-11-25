import { images } from "./images"

interface Member {
    name: string
    meta: string
    profilePic: string
    github?: string
    twitter?: string
    linkedin?: string
}

interface Team {
    year: string,
    members: Member[]
}

export const teams: Team[] = [
    {
        year: '24-25',
        members: [
            {
                name: 'Abhishek Patel',
                meta: 'CSE, CC - Representative',
                profilePic: 'https://github.com/meisabhishekpatel.png',
                github: 'https://github.com/meisabhishekpatel',
                linkedin: 'https://www.linkedin.com/in/shank03',
            },
            {
                name: 'Pranav Sanand Puligandla',
                meta: 'CSE, CC - Representative',
                profilePic: 'https://github.com/Pra-San.png',
                github: 'https://github.com/Pra-San',
                linkedin: 'https://www.linkedin.com/in/pranav-sanand-puligandla/',
            },
            {
                name: 'Sai Dheeraj Peketi',
                meta: 'CSE, CC - Representative',
                profilePic: 'https://github.com/SaiDheerajPeketi.png',
                github: 'https://github.com/SaiDheerajPeketi',
                linkedin: 'https://www.linkedin.com/in/peketisaidheeraj/',
            },
            {
                name: 'Nandika Agarwal',
                meta: 'CSE, CC - Representative',
                profilePic: 'https://github.com/Nandika-A.png',
                github: 'https://github.com/Nandika-A',
                linkedin: 'https://www.linkedin.com/in/nandika-agrawal-a10847219/'
            }
        ]
    },
    {
        year: '23-24',
        members: [
            {
                name: 'Shashank Verma',
                meta: 'CSE, CC - Dev Chapter Lead',
                profilePic: 'https://github.com/shank03.png',
                github: 'https://github.com/shank03',
                linkedin: 'https://www.linkedin.com/in/shank03',
                twitter: 'https://twitter.com/shank_03'
            },
            {
                name: 'Sanskar Omar',
                meta: 'CSE, CC - Dev Chapter Lead',
                profilePic: 'https://github.com/sanskaromar.png',
                github: 'https://github.com/sanskaromar',
                linkedin: 'https://www.linkedin.com/in/sanskaromar-/',
                twitter: 'https://twitter.com/SanskarOmar_'
            },
            {
                name: 'Priyav Kaneria',
                meta: 'CSE, CC - Dev Chapter Lead',
                profilePic: 'https://github.com/PriyavKaneria.png',
                github: 'https://github.com/PriyavKaneria',
                linkedin: 'https://www.linkedin.com/in/priyavkaneria/',
                twitter: 'https://twitter.com/priyav_kaneria'
            },
            {
                name: 'Amit Kumar',
                meta: 'CSE, CC - Representative',
                profilePic: 'https://github.com/hackeramitkumar.png',
                github: 'https://github.com/hackeramitkumar',
                linkedin: 'https://www.linkedin.com/in/amit3210'
            }
        ]
    },
    {
        year: '22-23',
        members: [
            {
                name: 'Divyansh Upadhyay',
                meta: 'IT, CC - Representative',
                profilePic: images.dup,
                github: 'https://github.com/DuP-491',
                linkedin: 'https://www.linkedin.com/in/divyansh-upadhyay'
            },
            {
                name: 'Siddhesh Patil',
                meta: 'CSE, CC - Core',
                profilePic: images.siddheshpatil,
                github: 'https://github.com/siddheshpatil777',
                linkedin: 'https://www.linkedin.com/in/siddheshpatil777'
            }
        ]
    }
];

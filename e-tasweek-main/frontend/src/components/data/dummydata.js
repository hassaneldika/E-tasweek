import {
  CloudOutlined,
  FavoriteBorder,
  Public,
  AddLocationAltOutlined,
  PhoneIphone,
  EmailOutlined,
  Facebook,
  Instagram,
} from "@mui/icons-material";
import VideoLibraryIcon from "@mui/icons-material/VideoLibrary";
import TagIcon from "@mui/icons-material/Tag";
import WebIcon from "@mui/icons-material/Web";
import DesignServicesIcon from "@mui/icons-material/DesignServices";
import MeetingRoomIcon from "@mui/icons-material/MeetingRoom";
import NotificationsIcon from "@mui/icons-material/Notifications";

export const navlink = [
  {
    url: "/",
    text: "Home",
  },
  {
    url: "/about",
    text: "About us",
  },
  {
    url: "/services",
    text: "Services",
  },
  {
    url: "/portfolio",
    text: "Portfolio",
  },
  {
    url: "/offers",
    text: "Offers",
  },

  {
    url: "/contact",
    text: "Contact us",
  },
];

export const admin_navlink = [
  {
    url: "/adminhome",
    text: "Home",
  },
  {
    url: "/adminabout",
    text: "About us",
  },
  {
    url: "/adminservices",
    text: "Services",
  },
  {
    url: "/adminportfolio",
    text: "Portfolio",
  },
  {
    url: "/adminoffers",
    text: "Offers",
  },

  {
    url: "/admincontact",
    text: "Contact us",
  },
  {
    url: "/login",
    text: "Logout",
  },
  {
    url: "/notification",
    text: <NotificationsIcon className="notification" />,
  },
];
export const home = [
  {
    text: "HELLO we are",
    name: "E-Tasweek",
    post: "Graphic DESIGNER",
    design: "Video editing service",
    task: "Social Media Management",
    task1: "Web Development",
    desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book",
  },
];
export const about = [
  {
    desc: "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur",
    desc1:
      "magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor si voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur",
    cover: "./images/man.jpg",
  },
];
export const services = [
  {
    id: 1,
    icon: <DesignServicesIcon />,
    title: "Graphic DESIGNER",
    desc: "Lorem Ipsum simply text of the printing and type setting industry when an unknown printing simply",
  },
  {
    id: 2,
    icon: <VideoLibraryIcon />,
    title: "Video editing service",
    desc: "Lorem Ipsum simply text of the printing and type setting industry when an unknown printing simply",
  },
  {
    id: 3,
    icon: <TagIcon />,
    title: "Social Media Management",
    desc: "Lorem Ipsum simply text of the printing and type setting industry when an unknown printing simply",
  },
  {
    id: 4,
    icon: <WebIcon />,
    title: "Web Development",
    desc: "Lorem Ipsum simply text of the printing and type setting industry when an unknown printing simply",
  },
];
export const project = [
  {
    id: 1,
    icon: <CloudOutlined />,
    num: "50",
    title: "HAPPY CLIENTS",
  },
  {
    id: 2,
    icon: <FavoriteBorder />,
    num: "31",
    title: "PROJECTS COMPLEATED",
  },
  {
    id: 3,
    icon: <Public />,
    num: "5",
    title: "Projects in progress",
  },
  // {
  //   id: 4,
  //   icon: <PersonOutlined />,   i should import it if i want to use it
  //   num: "14",
  //   title: "LIENS OF CODE",
  // },
];
export const portfolio = [
  {
    id: 1,
    cover: "../images/port/port1.jpg",
    name: "Company name",
    category: "Graphic Design",
    title: "Logo",
  },
  {
    id: 2,
    cover: "../images/port/port2.jpg",
    name: "Company name",
    category: "Social Media Management",
    title: "Logo",
  },
  {
    id: 3,
    cover: "../images/port/port3.jpg",
    name: "Company name",
    category: "Web Development",
    title: "Logo",
  },
  {
    id: 4,
    cover: "../images/port/port4.jpg",
    name: "Company name",
    category: "Video Editing",
    title: "Logo",
  },
  {
    id: 5,
    cover: "../images/port/port5.jpg",
    name: "Company name",
    category: "Graphic Design",
    title: "Logo",
  },
  {
    id: 6,
    cover: "../images/port/port6.jpg",
    name: "Company name",
    category: "Web Development",
    title: "Logo",
  },
];
export const testimonials = [
  {
    id: 1,
    text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitordapibus dictum.Fusce faucibus ligula scelerisque, eleifend turpis in",
    image: "./images/testimonials/offer.jpg",
    name: "Offer 1",
    post: "130$ ",
  },
  {
    id: 2,
    text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitordapibus dictum.Fusce faucibus ligula scelerisque, eleifend turpis in",
    image: "./images/testimonials/offer.jpg",
    name: "Offer 2",
    post: "30$",
  },
  {
    id: 3,
    text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitordapibus dictum.Fusce faucibus ligula scelerisque, eleifend turpis in",
    image: "./images/testimonials/offer.jpg",
    name: "Offer 3",
    post: "40$",
  },
  {
    id: 3,
    text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitordapibus dictum.Fusce faucibus ligula scelerisque, eleifend turpis in",
    image: "./images/testimonials/offer.jpg",
    name: "Offer 4",
    post: "100$",
  },
];
export const blog = [
  {
    id: 1,
    title: "Master Graphic Desinger",
    date: "Sep 27, 2022",
    author: "Youssef Zibar",
    desc: "Lorem Ipsum has been standard. Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been",
    cover: "./images/blog/b1.png",
  },
  {
    id: 2,
    title: "Best Design Items",
    date: "Sep 27, 2022",
    author: "Youssef Zibar",
    desc: "Lorem Ipsum has been standard. Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been",
    cover: "./images/blog/b2.png",
  },
  {
    id: 3,
    title: "Best Lightroom Presets",
    date: "Sep 27, 2022",
    author: "Youssef Zibar",
    desc: "Lorem Ipsum has been standard. Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been",
    cover: "./images/blog/b3.png",
  },
];
export const contact = [
  {
    icon: <AddLocationAltOutlined />,
  },
  {
    icon: <PhoneIphone />,
  },

  {
    icon: <MeetingRoomIcon />,
  },
  {
    icon: <EmailOutlined />,
  },
];
export const social = [
  {
    icon: <Facebook />,
    url: "https://m.facebook.com/TasweekAgency/",
  },
  {
    icon: <Instagram />,
    url: "https://instagram.com/etasweek?igshid=YmMyMTA2M2Y=",
  },
];

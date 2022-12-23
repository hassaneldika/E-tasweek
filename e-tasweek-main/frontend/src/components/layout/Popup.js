/* eslint-disable import/no-anonymous-default-export */
import React from 'react';
import Popup from 'reactjs-popup';
import 'reactjs-popup/dist/index.css';

export default () => (
  <Popup trigger={<button className='trigger'> Trigger</button>} position="right center">
    <p>Popup content here !!</p>
  </Popup>
);
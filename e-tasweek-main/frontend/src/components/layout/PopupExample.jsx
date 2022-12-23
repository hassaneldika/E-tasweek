/* eslint-disable jsx-a11y/anchor-is-valid */
import React from 'react'
import Popup from './Popup';



const PopupExample = () => (
    <Popup trigger={<button>Trigger</button>} position="top left">
        {close => (
            <div>
                Content here
                <a className="close"  onClick={close}>
                    &times;
                </a>
            </div>
        )}
    </Popup>
);

export default PopupExample;
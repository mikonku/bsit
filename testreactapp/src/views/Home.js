import React from "react";
import Content from "../components/Content";
import logo from "../logo.svg"

class Home extends React.Component {
    constructor() {
        super()
        this.state = {
            title: "belajar-react",
            value: "",
            list: []
        }
    }

    clickButton(e){
        // Biar gak reload all page
        e.preventDefault()
        const list = this.state.list
        list.push()

        this.setState({
            list: [...list, this.state.value]
        })
    }

    render() {

        // console.log(this.state.list);

        let listLength = this.state.list.length
        return (
            
        <header className="App-header">
            <img src={logo} className="App-logo" alt="logo" />
            <p>
            Edit <code>src/App.js</code> and save to reload.
            </p>
            <a
            className="App-link"
            href="https://reactjs.org"
            target="_blank"
            rel="noopener noreferrer"
            >
            Learn React
            </a>

            <form>
                <input type="text" 
                onChange=
                {
                    (event)=> {
                        this.setState({
                            value: event.target.value
                        })
                        // console.log(event.target.value)
                    }
                } 
               />
            <button onClick={(e)=>this.clickButton(e)}>Klik</button>
            </form>
            <h1>{this.state.title}</h1>
            <h2>Hasil: {this.state.value}</h2>
            
            <ul>
                {
                   this.state.list.map((v, index) => {
                      
                    return(<li  key={index}> {v} </li>)
                  
                    })
                }
            </ul>

            <Content/>
        </header>
        )
    }
}


export default Home;



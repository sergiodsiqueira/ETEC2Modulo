import React from "react";
import { Text, StyleSheet, TouchableOpacity } from "react-native"

export const CustomBtn = (props) => {
    
    const {textButton = "BOTAO", textStyle = {}, onPress} = props;
    
    return(
        <TouchableOpacity onPress={onPress} 
                          style={styles.btnEstilo}>
            
            <Text style={[styles.text, textStyle]}>
                {textButton}
            </Text>

        </TouchableOpacity>
    );
}

const styles = StyleSheet.create({
    text: {
        fontSize: 16,
        color: 'white',
        textTransform: 'uppercase'
    },

    btnEstilo: {
        backgroundColor: 'red',
        borderRadius: 8,
        padding: 8
    }
});
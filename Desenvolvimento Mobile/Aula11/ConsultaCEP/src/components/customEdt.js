import React from "react";
import { StyleSheet, Text, TextInput, View } from "react-native"
import fonts from '../styles/fonts';

export const CustomEdt = (props) => {
    
    const {txtLabel = "DIGITE", txtPlaceHolder = 'DIGITE AQUI'} = props;
    
    return(
        <View style={{marginLeft:15, marginRight:15}}>
        
            <Text style={styles.label}>
                {txtLabel}
            </Text>

            <TextInput style={styles.edit}
                    placeholder={txtPlaceHolder}/>

        </View>
    );
}

const styles = StyleSheet.create({
    label: {
        fontFamily: fonts.normal,
        fontSize: 10,
        color: 'silver',
        textTransform: 'uppercase'
    },

    edit: {
        placeholderTextColor: 'silver',
        fontFamily: fonts.normal,
        fontSize: 25,
        borderColor: 'silver',
        borderWidth: 1,
        borderRadius: 8,
        height: 35
    }
});
import React from 'react';
import {createNativeStackNavigator} from '@react-navigation/native-stack';
import { Welcome } from '../screens/welcome'
import { Menu } from '../screens/menu';

const Stack = createNativeStackNavigator();

const AppRoutes = () => (
    <Stack.Navigator screenOptions={{headerStyle: {backgroundColor: 'black'}}}>
        <Stack.Screen name='Welcome' component={Welcome} options={{headerTitle:'HOME', headerShown: false}}/>       
        <Stack.Screen name='Menu' component={Menu} options={{headerTitle:'', headerShown: false, headerTintColor: 'white'}}/> 
    </Stack.Navigator>
)

export default AppRoutes;

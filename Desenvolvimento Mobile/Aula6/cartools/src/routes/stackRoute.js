import React from 'react';
import {createNativeStackNavigator} from '@react-navigation/native-stack';
import { Welcome } from './src/screens/welcome';
import { Menu } from './src/screens/menu';

const Stack = createNativeStackNavigator();

const AppRoutes = () => (
    <Stack.Navigator screenOptions={{headerStyle: {backgroundColor: 'red'}}}>
        <Stack.Screen name='Welcome' component={Welcome} />
        <Stack.Screen name='Menu'    component={Menu}    />
    </Stack.Navigator>
)

